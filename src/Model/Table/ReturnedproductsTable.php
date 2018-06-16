<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Returnedproducts Model
 *
 * @property \App\Model\Table\SellingbillsTable|\Cake\ORM\Association\BelongsTo $Sellingbills
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Returnedproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Returnedproduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Returnedproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Returnedproduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Returnedproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Returnedproduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Returnedproduct findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReturnedproductsTable extends Table
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

        $this->setTable('returnedproducts');
        $this->setDisplayField('sellingbill_id');
        $this->setPrimaryKey(['sellingbill_id', 'product_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sellingbills', [
            'foreignKey' => 'sellingbill_id',
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
            ->integer('quatiny')
            ->requirePresence('quatiny', 'create')
            ->notEmpty('quatiny');

        $validator
            ->scalar('note')
            ->maxLength('note', 55)
            ->requirePresence('note', 'create')
            ->notEmpty('note');

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