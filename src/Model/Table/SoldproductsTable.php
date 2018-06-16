<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Soldproducts Model
 *
 * @property \App\Model\Table\SellingbillsTable|\Cake\ORM\Association\BelongsTo $Sellingbills
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Soldproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Soldproduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Soldproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Soldproduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Soldproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Soldproduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Soldproduct findOrCreate($search, callable $callback = null, $options = [])
 */
class SoldproductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('soldproducts');
        $this->setDisplayField('sellingbill_id');
        $this->setPrimaryKey(['sellingbill_id', 'product_id']);

        $this->belongsTo('Sellingbills', [
            'foreignKey' => 'sellingbill_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
    }

    public function beforeSave($event, $entity, $options)
    {
        if($entity->quantity==0) return false;
        $Products = TableRegistry::get('Products');
        var_dump($entity->product_id);
        $product = $Products->get($entity->product_id);
        
        if($product->quantity<$entity->quantity)return false;
        $unitPrice = $entity->total / $entity->quantity;
        if($unitPrice < $product->cost) return false;
        $newQuantity = $product->quantity - $entity->quantity;
        $product->quantity =  $newQuantity;

        if ($this->Products->save($product)) {
                echo "Updated";
                return true;
            }
        return false;

    

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sellingbill_id'], 'Sellingbills'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
