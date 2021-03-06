<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Buyingbill Entity
 *
 * @property int $id
 * @property string $user_name
 * @property \Cake\I18n\FrozenTime $created
 * @property int $total
 * @property string $provider
 *
 * @property \App\Model\Entity\Boughtproduct[] $boughtproducts
 */
class Buyingbill extends Entity
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
        'user_name' => true,
        'created' => true,
        'total' => true,
        'provider' => true,
        'boughtproducts' => true
    ];
}
