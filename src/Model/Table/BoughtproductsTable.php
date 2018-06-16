<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Boughtproducts Model
 *
 * @property \App\Model\Table\BuyingbillsTable|\Cake\ORM\Association\BelongsTo $Buyingbills
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Boughtproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Boughtproduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Boughtproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Boughtproduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boughtproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Boughtproduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Boughtproduct findOrCreate($search, callable $callback = null, $options = [])
 */
class BoughtproductsTable extends Table
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

        $this->setTable('boughtproducts');
        $this->setDisplayField('buyingbill_id');
        $this->setPrimaryKey(['buyingbill_id', 'product_id']);

        $this->belongsTo('Buyingbills', [
            'foreignKey' => 'buyingbill_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['buyingbill_id'], 'Buyingbills'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
