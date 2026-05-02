<?php
namespace App\Tests\Service;

use App\Entity\Product;
use App\Service\ProductManager;
use PHPUnit\Framework\TestCase;

class ProductManagerTest extends TestCase
{
    // ✅ Test 1 : produit valide
    public function testValidProduct()
    {
        $product = new Product();
        $product->setNomProduit('Ordinateur');
        $product->setPrix(999.99);
        $product->setCategorie('Informatique');

        $manager = new ProductManager();
        $this->assertTrue($manager->validate($product));
    }

    // ❌ Test 2 : nom vide
    public function testProductWithoutName()
    {
        $this->expectException(\InvalidArgumentException::class);

        $product = new Product();
        $product->setNomProduit('');
        $product->setPrix(999.99);
        $product->setCategorie('Informatique');

        $manager = new ProductManager();
        $manager->validate($product);
    }

    // ❌ Test 3 : prix invalide
    public function testProductWithInvalidPrice()
    {
        $this->expectException(\InvalidArgumentException::class);

        $product = new Product();
        $product->setNomProduit('Ordinateur');
        $product->setPrix(-50);
        $product->setCategorie('Informatique');

        $manager = new ProductManager();
        $manager->validate($product);
    }

    // ❌ Test 4 : catégorie vide
    public function testProductWithoutCategory()
    {
        $this->expectException(\InvalidArgumentException::class);

        $product = new Product();
        $product->setNomProduit('Ordinateur');
        $product->setPrix(999.99);
        $product->setCategorie('');

        $manager = new ProductManager();
        $manager->validate($product);
    }
}