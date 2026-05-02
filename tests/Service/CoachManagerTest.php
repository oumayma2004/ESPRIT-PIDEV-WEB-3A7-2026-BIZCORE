<?php

namespace App\Tests\Service;

use App\Entity\Coach;
use App\Service\CoachManager;
use PHPUnit\Framework\TestCase;

/**
 * Tests unitaires pour CoachManager.
 *
 * Règles métier testées :
 *   1. Le nom du coach est obligatoire
 *   2. Le prénom du coach est obligatoire
 *   3. Le tarif horaire doit être supérieur à 0
 *   4. L'expérience ne peut pas être négative
 *   5. Le numéro de téléphone doit respecter le format international
 */
class CoachManagerTest extends TestCase
{
    private CoachManager $manager;

    protected function setUp(): void
    {
        $this->manager = new CoachManager();
    }

    // ------------------------------------------------------------------ //
    //  Cas valides                                                         //
    // ------------------------------------------------------------------ //

    public function testValidCoachPassesValidation(): void
    {
        $coach = $this->buildValidCoach();

        $this->assertTrue($this->manager->validate($coach));
    }

    public function testCoachWithoutPhoneIsValid(): void
    {
        // Le téléphone est nullable → doit être accepté sans erreur
        $coach = $this->buildValidCoach();
        $coach->setNumTel(null);

        $this->assertTrue($this->manager->validate($coach));
    }

    public function testCoachWithoutTarifIsValid(): void
    {
        // Le tarif est nullable → doit être accepté sans erreur
        $coach = $this->buildValidCoach();
        $coach->setTarifHoraire(null);

        $this->assertTrue($this->manager->validate($coach));
    }

    public function testCoachWithZeroExperienceIsValid(): void
    {
        // 0 an d'expérience est autorisé (≥ 0)
        $coach = $this->buildValidCoach();
        $coach->setExperienceAnnees(0);

        $this->assertTrue($this->manager->validate($coach));
    }

    // ------------------------------------------------------------------ //
    //  Règle 1 : Nom obligatoire                                          //
    // ------------------------------------------------------------------ //

    public function testCoachWithEmptyNomThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le nom du coach est obligatoire');

        $coach = $this->buildValidCoach();
        $coach->setNom('');

        $this->manager->validate($coach);
    }

    public function testCoachWithBlankNomThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $coach = $this->buildValidCoach();
        $coach->setNom('   ');

        $this->manager->validate($coach);
    }

    // ------------------------------------------------------------------ //
    //  Règle 2 : Prénom obligatoire                                       //
    // ------------------------------------------------------------------ //

    public function testCoachWithEmptyPrenomThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le prénom du coach est obligatoire');

        $coach = $this->buildValidCoach();
        $coach->setPrenom('');

        $this->manager->validate($coach);
    }

    // ------------------------------------------------------------------ //
    //  Règle 3 : Tarif horaire > 0                                        //
    // ------------------------------------------------------------------ //

    public function testCoachWithZeroTarifThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le tarif horaire doit être supérieur à 0');

        $coach = $this->buildValidCoach();
        $coach->setTarifHoraire('0');

        $this->manager->validate($coach);
    }

    public function testCoachWithNegativeTarifThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le tarif horaire doit être supérieur à 0');

        $coach = $this->buildValidCoach();
        $coach->setTarifHoraire('-50');

        $this->manager->validate($coach);
    }

    // ------------------------------------------------------------------ //
    //  Règle 4 : Expérience ≥ 0                                          //
    // ------------------------------------------------------------------ //

    public function testCoachWithNegativeExperienceThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("L'expérience ne peut pas être négative");

        $coach = $this->buildValidCoach();
        $coach->setExperienceAnnees(-1);

        $this->manager->validate($coach);
    }

    // ------------------------------------------------------------------ //
    //  Règle 5 : Format du numéro de téléphone                            //
    // ------------------------------------------------------------------ //

    public function testCoachWithInvalidPhoneFormatThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Le numéro de téléphone n'est pas valide");

        $coach = $this->buildValidCoach();
        $coach->setNumTel('0612345678'); // Manque le '+'

        $this->manager->validate($coach);
    }

    public function testCoachWithPhoneTooShortThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $coach = $this->buildValidCoach();
        $coach->setNumTel('+123'); // Moins de 8 chiffres après le '+'

        $this->manager->validate($coach);
    }

    public function testCoachWithPhoneContainingLettersThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $coach = $this->buildValidCoach();
        $coach->setNumTel('+21612ABC56');

        $this->manager->validate($coach);
    }

    public function testCoachWithValidInternationalPhonePasses(): void
    {
        $coach = $this->buildValidCoach();
        $coach->setNumTel('+21698765432');

        $this->assertTrue($this->manager->validate($coach));
    }

    // ------------------------------------------------------------------ //
    //  Helpers                                                             //
    // ------------------------------------------------------------------ //

    /**
     * Construit un Coach entièrement valide, utilisable comme point de départ
     * pour chaque test.
     */
    private function buildValidCoach(): Coach
    {
        $coach = new Coach();
        $coach->setNom('Ben Ali');
        $coach->setPrenom('Sami');
        $coach->setBiographie('Coach certifié avec plus de 10 ans d\'expérience en coaching professionnel.');
        $coach->setExperienceAnnees(10);
        $coach->setTarifHoraire('80.00');
        $coach->setDisponibilite('Disponible');
        $coach->setDomaine('Développement personnel');
        $coach->setNumTel('+21698000001');

        return $coach;
    }
}
