<?php
namespace App\Service;

use App\Entity\Product;

class ProductManager
{
    public function validate(Product $product): bool
    {
        if (empty($product->getNomProduit())) {
            throw new \InvalidArgumentException('Le nom du produit est obligatoire');
        }
        if ($product->getPrix() <= 0) {
            throw new \InvalidArgumentException('Le prix doit être supérieur à zéro');
        }
        if (empty($product->getCategorie())) {
            throw new \InvalidArgumentException('La catégorie est obligatoire');
        }
        return true;
    }
}