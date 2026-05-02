<?php

namespace App\Service;

use App\Entity\Coach;

/**
 * Service métier de validation d'un Coach.
 *
 * Règles métier encapsulées ici (indépendantes de Doctrine/Symfony)
 * pour faciliter les tests unitaires purs (sans base de données).
 */
class CoachManager
{
    /**
     * Valide les règles métier d'un Coach.
     *
     * @throws \InvalidArgumentException si une règle métier est violée
     */
    public function validate(Coach $coach): bool
    {
        // Règle 1 : Le nom est obligatoire
        if (empty(trim($coach->getNom()))) {
            throw new \InvalidArgumentException('Le nom du coach est obligatoire');
        }

        // Règle 2 : Le prénom est obligatoire
        if (empty(trim($coach->getPrenom()))) {
            throw new \InvalidArgumentException('Le prénom du coach est obligatoire');
        }

        // Règle 3 : Le tarif horaire doit être strictement supérieur à 0
        if ($coach->getTarifHoraire() !== null && (float) $coach->getTarifHoraire() <= 0) {
            throw new \InvalidArgumentException('Le tarif horaire doit être supérieur à 0');
        }

        // Règle 4 : L'expérience ne peut pas être négative
        if ($coach->getExperienceAnnees() !== null && $coach->getExperienceAnnees() < 0) {
            throw new \InvalidArgumentException("L'expérience ne peut pas être négative");
        }

        // Règle 5 : Le numéro de téléphone doit respecter le format international (+XXXXXXXX)
        if ($coach->getNumTel() !== null && !preg_match('/^\+[0-9]{8,18}$/', $coach->getNumTel())) {
            throw new \InvalidArgumentException("Le numéro de téléphone n'est pas valide (format attendu : +XXXXXXXX)");
        }

        return true;
    }
}
