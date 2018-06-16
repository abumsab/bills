<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Soldproduct Entity
 *
 * @property int $sellingbill_id
 * @property int $product_id
 * @property int $quatiny
 * @property int $total
 *
 * @property \App\Model\Entity\Sellingbill $sellingbill
 * @property \App\Model\Entity\Product $product
 */
class Soldproduct extends Entity
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
        'quantity' => true,
        'total' => true,
        'sellingbill' => true,
        'product' => true
    ];
}
