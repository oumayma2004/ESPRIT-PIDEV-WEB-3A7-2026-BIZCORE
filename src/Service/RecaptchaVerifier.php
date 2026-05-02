<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RecaptchaVerifier
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $recaptchaSecret,
        private readonly bool $recaptchaEnabled,
    ) {
    }

    public function verify(string $token, string $expectedAction, ?string $ip = null, float $minScore = 0.5): bool
    {
        if (!$this->recaptchaEnabled) {
            return true;
        }

        if ($token === '') {
            return false;
        }

        $payload = [
            'secret' => $this->recaptchaSecret,
            'response' => $token,
        ];

        if ($ip) {
            $payload['remoteip'] = $ip;
        }

        try {
            $response = $this->httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => $payload,
            ]);

            $data = $response->toArray(false);
        } catch (\Throwable) {
            return false;
        }

        if (!($data['success'] ?? false)) {
            return false;
        }

        if (($data['action'] ?? null) !== $expectedAction) {
            return false;
        }

        return (float) ($data['score'] ?? 0) >= $minScore;
    }
}
