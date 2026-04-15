<?php

namespace App\Service;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeService
{
    public function generate(array $data): string
    {
        $content = "=== VOTRE BILLET ===\n" .
                "Bienvenue " . $data['customer'] . "!\n\n" .
                "ID: "        . $data['id'] . "\n" .
                "Événement: " . $data['event'] . "\n" .
                "Place: "     . $data['seat'] . "\n" .
                "Montant: "   . $data['amount'] . "\n" .
                "Date: "      . $data['date'] . "\n\n" .
                "Bienvenue et bonne expérience !";

        $result = (new Builder(
            writer: new PngWriter(),
            data: $content,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: 300,
            margin: 10,
        ))->build();

        return $result->getString();
    }
}