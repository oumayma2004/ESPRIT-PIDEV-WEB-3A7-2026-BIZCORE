<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TelegramNotificationService
{
    private string $botToken;
    private string $chatId;

    public function __construct(
        private HttpClientInterface $httpClient,
        private LoggerInterface $logger,
        string $telegramBotToken,
        string $telegramChatId
    ) {
        $this->botToken = $telegramBotToken;
        $this->chatId   = $telegramChatId;
    }

    public function send(string $message): bool
    {
        if (empty($this->botToken) || empty($this->chatId)) {
            $this->logger->warning('[Telegram] Token ou Chat ID manquant.');
            return false;
        }

        $url = sprintf('https://api.telegram.org/bot%s/sendMessage', $this->botToken);

        try {
            $response = $this->httpClient->request('POST', $url, [
                'json' => [
                    'chat_id' => $this->chatId,
                    'text'    => $message,
                ],
            ]);

            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false);

            if ($statusCode === 200) {
                $this->logger->info('[Telegram] Message envoyé avec succès.');
                return true;
            }

            $this->logger->error('[Telegram] API a retourné une erreur.', [
                'status' => $statusCode,
                'response' => $data,
            ]);
            return false;
        } catch (\Throwable $e) {
            $this->logger->error('[Telegram] Exception lors de l\'envoi.', [
                'error' => $e->getMessage(),
            ]);
            return false;
        }
    }
}
