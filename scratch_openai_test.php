<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpClient\HttpClient;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$key = $_ENV['OPENAI_API_KEY'] ?? '';
echo "Key configured: " . (strlen($key) > 5 ? "Yes" : "No") . "\n";

$client = HttpClient::create();
try {
    $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . trim($key),
            'Content-Type' => 'application/json'
        ],
        'json' => [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => "Test"]
            ],
            'max_tokens' => 10
        ]
    ]);
    
    $data = $response->toArray(false);
    if (isset($data['error'])) {
        echo "API Error: " . $data['error']['code'] . " - " . $data['error']['message'] . "\n";
    } else {
        echo "API Success! Response: " . json_encode($data['choices'][0]['message'] ?? 'null') . "\n";
    }
} catch (\Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
