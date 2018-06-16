<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $cost
 * @property int $quantity
 * @property string $waranty
 *
 * @property \App\Model\Entity\Boughtproduct[] $boughtproducts
 * @property \App\Model\Entity\DamagedProduct[] $damaged_product
 * @property \App\Model\Entity\Returnedproduct[] $returnedproducts
 * @property \App\Model\Entity\Soldproduct[] $soldproducts
 * @property \App\Model\Entity\Wholesoldproduct[] $wholesoldproducts
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'price' => true,
        'cost' => true,
        'quantity' => true,
        'waranty' => true,
        'boughtproducts' => true,
        'damaged_product' => true,
        'returnedproducts' => true,
        'soldproducts' => true,
        'wholesoldproducts' => true
    ];
}
