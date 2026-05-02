<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Sends SMS via Twilio REST API using symfony/http-client (no extra SDK needed).
 * All errors are caught and logged — SMS failure never crashes the reservation flow.
 */
class TwilioSmsService
{
    private string $accountSid;
    private string $authToken;
    private string $fromNumber;
    private string $toNumber;

    public function __construct(
        private HttpClientInterface $httpClient,
        private LoggerInterface $logger,
        string $twilioAccountSid,
        string $twilioAuthToken,
        string $twilioFromNumber,
        string $twilioToNumber,
    ) {
        $this->accountSid = $twilioAccountSid;
        $this->authToken  = $twilioAuthToken;
        $this->fromNumber = $twilioFromNumber !== '' ? $this->normalizePhone($twilioFromNumber) : '';
        $this->toNumber   = $twilioToNumber   !== '' ? $this->normalizePhone($twilioToNumber)   : '';
    }

    /**
     * Send an SMS for a new reservation.
     * Returns true if the message was accepted by Twilio, false otherwise.
     * Never throws — failure is only logged.
     */
    public function sendReservationSms(
        string $userName,
        string $coachName,
        string $date,
        string $statut = 'CONFIRMEE',
        ?string $toPhone = null
    ): bool {
        $body = sprintf(
            'Nouvelle réservation : %s a réservé un coaching avec %s pour le %s. Statut : %s.',
            $userName,
            $coachName,
            $date,
            $statut
        );

        return $this->send($body, $toPhone);
    }

    /**
     * Send a raw SMS message. If $to is null/empty, falls back to TWILIO_TO_NUMBER.
     */
    public function send(string $message, ?string $to = null): bool
    {
        // Skip sending if credentials are placeholders
        if (str_contains($this->accountSid, 'xxx') || str_contains($this->authToken, 'your_auth')) {
            $this->logger->info('[Twilio] Credentials are placeholders — SMS skipped (not sent).', [
                'message' => $message,
            ]);
            return false;
        }

        $destination = $to ? $this->normalizePhone($to) : $this->toNumber;

        if (!$destination || $destination === '+') {
            $this->logger->warning('[Twilio] No destination phone number — SMS skipped.', [
                'message' => $message,
            ]);
            return false;
        }

        $url = sprintf(
            'https://api.twilio.com/2010-04-01/Accounts/%s/Messages.json',
            $this->accountSid
        );

        try {
            $response = $this->httpClient->request('POST', $url, [
                'auth_basic' => [$this->accountSid, $this->authToken],
                'body'       => [
                    'From' => $this->fromNumber,
                    'To'   => $destination,
                    'Body' => $message,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $data = $response->toArray(throw: false);

            if ($statusCode === 201) {
                $twilioStatus = $data['status'] ?? 'queued';
                $this->logger->info('[Twilio] SMS accepted by API.', [
                    'sid'           => $data['sid'] ?? 'N/A',
                    'to'            => $destination,
                    'twilio_status' => $twilioStatus,
                    'error_code'    => $data['error_code'] ?? null,
                    'error_message' => $data['error_message'] ?? null,
                    'body'          => $message,
                ]);
                // Twilio returns 201 even when it later fails (queued/undelivered/failed).
                // Return false if Twilio immediately reports an error.
                if (!empty($data['error_code'])) {
                    return false;
                }
                return true;
            }

            $this->logger->error('[Twilio] API returned error.', [
                'status'  => $statusCode,
                'code'    => $data['code'] ?? 'N/A',
                'message' => $data['message'] ?? 'Unknown error',
                'to'      => $destination,
            ]);
            return false;

        } catch (\Throwable $e) {
            $this->logger->error('[Twilio] Exception while sending SMS.', [
                'error' => $e->getMessage(),
                'to'    => $destination,
            ]);
            return false;
        }
    }

    /**
     * Normalize a phone number to E.164 format.
     * - Strips spaces, dashes, parentheses.
     * - "00xxx" → "+xxx"
     * - Bare 8-digit Tunisian local (e.g. "58410216") → "+216xxxxxxxx"
     * - Ensures leading "+".
     */
    private function normalizePhone(string $phone): string
    {
        // Strip everything except digits and leading +
        $phone = preg_replace('/[^\d+]/', '', $phone);

        if ($phone === '' || $phone === '+') {
            return '';
        }

        // If starts with 00, replace with +
        if (str_starts_with($phone, '00')) {
            $phone = '+' . substr($phone, 2);
        }

        // Bare 8-digit local Tunisian number → prepend +216
        if (!str_starts_with($phone, '+') && strlen($phone) === 8) {
            $phone = '+216' . $phone;
        }

        // Ensure it starts with +
        if (!str_starts_with($phone, '+')) {
            $phone = '+' . $phone;
        }

        return $phone;
    }
}
