<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Wholebill Entity
 *
 * @property int $ID
 * @property string $username
 * @property \Cake\I18n\FrozenTime $created
 * @property string $customerId
 * @property int $total
 *
 * @property \App\Model\Entity\Wholesoldproduct[] $wholesoldproducts
 */
class Wholebill extends Entity
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
        'username' => true,
        'created' => true,
        'customerId' => true,
        'total' => true,
        'wholesoldproducts' => true
    ];
}
