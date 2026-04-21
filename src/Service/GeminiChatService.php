<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiChatService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $apiKey,
        private readonly string $model,
    ) {}

    public function ask(string $message, array $context = []): string
    {
        $instructions = 'You are BizCore Assistant, a helpful dashboard chatbot for an admin panel. '
            . 'Answer briefly, clearly, and in a business-friendly tone. '
            . 'Use the dashboard context when relevant. '
            . 'If the user asks about users, stats, alerts, or admin actions, explain based on the context.';

        if (!empty($context)) {
            $instructions .= "\n\nDashboard context:\n" . json_encode($context, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        }

        $prompt = $instructions . "\n\nUser message:\n" . $message;

        $response = $this->httpClient->request('POST', sprintf(
            'https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent',
            $this->model
        ), [
            'headers' => [
                'x-goog-api-key' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $prompt],
                        ],
                    ],
                ],
                'generationConfig' => [
                    'temperature' => 0.4,
                    'maxOutputTokens' => 300,
                ],
            ],
            'timeout' => 60,
        ]);

        $data = $response->toArray(false);

        if (!empty($data['error']['message'])) {
            throw new \RuntimeException((string) $data['error']['message']);
        }

        $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

        if (is_string($text) && trim($text) !== '') {
            return trim($text);
        }

        return 'I could not generate a reply just now.';
    }
}