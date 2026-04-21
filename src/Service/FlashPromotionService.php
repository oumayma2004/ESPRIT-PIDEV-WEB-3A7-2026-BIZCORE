<?php

namespace App\Service;

/**
 * FlashPromotionService
 *
 * Gère les promotions flash côté serveur via un fichier JSON.
 * Toute la logique de validation, de calcul et d'expiration est
 * entièrement gérée ici — le frontend ne peut pas falsifier les données.
 *
 * Durée fixe : 60 secondes.
 */
class FlashPromotionService
{
    private const MIN_DURATION = 60;
    private const MAX_DURATION = 3600; // 1 heure max
    private string $storagePath;

    public function __construct(string $kernelProjectDir)
    {
        $this->storagePath = $kernelProjectDir . '/var/flash_promos.json';
    }

    // ══════════════════════════════════════════════════════════════════
    //  PUBLIC API
    // ══════════════════════════════════════════════════════════════════

    /**
     * Active une promotion flash pour un vendeur.
     *
     * @param int $durationSeconds Durée en secondes (60–3600)
     */
    public function activate(int $vendorId, string $vendorName, int $discountPercent, int $durationSeconds = 60): array
    {
        $durationSeconds = max(self::MIN_DURATION, min(self::MAX_DURATION, $durationSeconds));
        $now    = time();
        $promos = $this->load();

        $promo = [
            'vendorId'        => $vendorId,
            'vendorName'      => $vendorName,
            'discountPercent' => $discountPercent,
            'durationSeconds' => $durationSeconds,
            'startedAt'       => $now,
            'expiresAt'       => $now + $durationSeconds,
        ];

        $promos[(string) $vendorId] = $promo;
        $this->save($promos);

        return $promo;
    }

    /**
     * Annule manuellement la promo d'un vendeur.
     */
    public function cancel(int $vendorId): void
    {
        $promos = $this->load();
        unset($promos[(string) $vendorId]);
        $this->save($promos);
    }

    /**
     * Retourne la promo active d'un vendeur, ou null si expirée / inexistante.
     */
    public function getActive(int $vendorId): ?array
    {
        $promos = $this->load();
        $key    = (string) $vendorId;

        if (!isset($promos[$key])) {
            return null;
        }

        $promo = $promos[$key];

        // Expiration gérée côté serveur
        if (time() >= $promo['expiresAt']) {
            unset($promos[$key]);
            $this->save($promos);
            return null;
        }

        return $promo;
    }

    /**
     * Retourne le statut complet d'une promo pour l'affichage admin/vendeur.
     */
    public function getStatus(int $vendorId): array
    {
        $promo = $this->getActive($vendorId);

        if ($promo === null) {
            return [
                'active'          => false,
                'vendorId'        => $vendorId,
                'discountPercent' => null,
                'startedAt'       => null,
                'expiresAt'       => null,
                'remainingSeconds'=> 0,
            ];
        }

        return [
            'active'           => true,
            'vendorId'         => $promo['vendorId'],
            'vendorName'       => $promo['vendorName'],
            'discountPercent'  => $promo['discountPercent'],
            'startedAt'        => $promo['startedAt'],
            'expiresAt'        => $promo['expiresAt'],
            'remainingSeconds' => max(0, $promo['expiresAt'] - time()),
        ];
    }

    /**
     * Retourne toutes les promos actives (pour le frontend marketplace).
     * Les promos expirées sont automatiquement purgées.
     * Résultat indexé par vendorId.
     */
    public function getAllActive(): array
    {
        $promos  = $this->load();
        $now     = time();
        $active  = [];
        $changed = false;

        foreach ($promos as $key => $promo) {
            if ($now >= $promo['expiresAt']) {
                unset($promos[$key]);
                $changed = true;
                continue;
            }

            $active[(string)$promo['vendorId']] = [
                'vendorId'         => $promo['vendorId'],
                'vendorName'       => $promo['vendorName'],
                'discountPercent'  => $promo['discountPercent'],
                'expiresAt'        => $promo['expiresAt'],
                'remainingSeconds' => max(0, $promo['expiresAt'] - $now),
            ];
        }

        if ($changed) {
            $this->save($promos);
        }

        return $active;
    }

    /**
     * Calcule le prix remisé de façon sécurisée côté serveur.
     * Le frontend ne doit jamais calculer lui-même le prix final.
     */
    public function computeDiscountedPrice(float $originalPrice, int $discountPercent): float
    {
        $discount = max(0, min(90, $discountPercent)); // borne entre 0 et 90 %
        return round($originalPrice * (1 - $discount / 100), 2);
    }

    // ══════════════════════════════════════════════════════════════════
    //  INTERNAL HELPERS
    // ══════════════════════════════════════════════════════════════════

    private function load(): array
    {
        if (!file_exists($this->storagePath)) {
            return [];
        }

        $json = file_get_contents($this->storagePath);
        if ($json === false) {
            return [];
        }

        $data = json_decode($json, true);
        return is_array($data) ? $data : [];
    }

    private function save(array $promos): void
    {
        $dir = dirname($this->storagePath);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents(
            $this->storagePath,
            json_encode($promos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
            LOCK_EX
        );
    }
}
