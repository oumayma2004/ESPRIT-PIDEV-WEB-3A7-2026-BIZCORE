<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    #[Route('/marketplace/api/translate', name: 'api_translate', methods: ['POST'])]
    public function translate(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';
        $sourceLang = $data['source_lang'] ?? 'fr';
        $targetLang = $data['target_lang'] ?? 'en';

        if (empty(trim($text))) {
            return new JsonResponse(['translatedText' => $text]);
        }

        try {
            $url = 'https://translate.googleapis.com/translate_a/single';
            $response = $this->httpClient->request('GET', $url, [
                'query' => [
                    'client' => 'gtx',
                    'sl' => $sourceLang,
                    'tl' => $targetLang,
                    'dt' => 't',
                    'q' => $text
                ]
            ]);

            $content = $response->toArray();
            
            $translatedText = '';
            if (isset($content[0]) && is_array($content[0])) {
                foreach ($content[0] as $chunk) {
                    if (isset($chunk[0])) {
                        $translatedText .= $chunk[0];
                    }
                }
            }

            return new JsonResponse([
                'translatedText' => $translatedText ?: $text
            ]);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage(), 'translatedText' => $text], 500);
        }
    }

    #[Route('/marketplace/api/translate-batch', name: 'api_translate_batch', methods: ['POST'])]
    public function translateBatch(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $texts = $data['texts'] ?? [];
        $sourceLang = $data['source_lang'] ?? 'fr';
        $targetLang = $data['target_lang'] ?? 'en';

        if (empty($texts) || !is_array($texts)) {
            return new JsonResponse(['translatedTexts' => $texts]);
        }

        $delimiter = ' ||| ';
        $joinedText = implode($delimiter, $texts);

        try {
            $url = 'https://translate.googleapis.com/translate_a/single';
            $response = $this->httpClient->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
                'body' => http_build_query([
                    'client' => 'gtx',
                    'sl' => $sourceLang,
                    'tl' => $targetLang,
                    'dt' => 't',
                    'q' => $joinedText
                ])
            ]);

            $content = $response->toArray();
            
            $translatedText = '';
            if (isset($content[0]) && is_array($content[0])) {
                foreach ($content[0] as $chunk) {
                    if (isset($chunk[0])) {
                        $translatedText .= $chunk[0];
                    }
                }
            }

            $translatedTexts = explode('|||', $translatedText);
            
            $result = [];
            foreach ($texts as $i => $original) {
                if (isset($translatedTexts[$i]) && trim($original) !== '') {
                    $result[] = trim($translatedTexts[$i]);
                } else {
                    $result[] = $original;
                }
            }

            return new JsonResponse([
                'translatedTexts' => $result
            ]);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage(), 'translatedTexts' => $texts], 500);
        }
    }

    #[Route('/marketplace/api/currency-rates', name: 'api_currency_rates', methods: ['GET'])]
    public function currencyRates(): JsonResponse
    {
        try {
            $response = $this->httpClient->request('GET', "https://open.er-api.com/v6/latest/EUR");
            $content = $response->toArray();

            if (isset($content['rates'])) {
                return new JsonResponse([
                    'rates' => $content['rates'],
                    'base' => 'EUR'
                ]);
            }

            return new JsonResponse(['error' => 'Currency rates not available'], 500);

        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }
}
