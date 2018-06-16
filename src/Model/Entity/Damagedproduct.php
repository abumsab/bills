<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Damagedproduct Entity
 *
 * @property int $product_id
 * @property string $user_name
 * @property int $quatiny
 * @property int $note
 * @property \Cake\I18n\FrozenTime $created
 * @property int $id
 *
 * @property \App\Model\Entity\Product $product
 */
class Damagedproduct extends Entity
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
        'product_id' => true,
        'user_name' => true,
        'quatiny' => true,
        'note' => true,
        'created' => true,
        'product' => true
    ];
}
