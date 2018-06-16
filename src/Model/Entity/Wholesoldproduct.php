<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Wholesoldproduct Entity
 *
 * @property int $wholebill_id
 * @property int $product_id
 * @property int $quatiny
 * @property int $total
 *
 * @property \App\Model\Entity\Wholebill $wholebill
 * @property \App\Model\Entity\Product $product
 */
class Wholesoldproduct extends Entity
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
        'quatiny' => true,
        'total' => true,
        'wholebill' => true,
        'product' => true
    ];
}
