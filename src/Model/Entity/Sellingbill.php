<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sellingbill Entity
 *
 * @property int $id
 * @property string $user_name
 * @property \Cake\I18n\FrozenTime $created
 * @property string $customer_id
 * @property int $total
 * @property bool $isaramex
 * @property bool $ispost
 * @property string $truckingNo
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Returnedproduct[] $returnedproducts
 * @property \App\Model\Entity\Soldproduct[] $soldproducts
 */
class Sellingbill extends Entity
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
        'customer_id' => true,
        'total' => true,
        'isaramex' => true,
        'ispost' => true,
        'truckingNo' => true,
        'customer' => true,
        'returnedproducts' => true,
        'soldproducts' => true
    ];
}
