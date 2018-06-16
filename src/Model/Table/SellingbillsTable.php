<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sellingbills Model
 *
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\ReturnedproductsTable|\Cake\ORM\Association\HasMany $Returnedproducts
 * @property \App\Model\Table\SoldproductsTable|\Cake\ORM\Association\HasMany $Soldproducts
 *
 * @method \App\Model\Entity\Sellingbill get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sellingbill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sellingbill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sellingbill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sellingbill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sellingbill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sellingbill findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SellingbillsTable extends Table
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

        $this->setTable('sellingbills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_name',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Returnedproducts', [
            'foreignKey' => 'sellingbill_id'
        ]);
        $this->hasMany('Soldproducts', [
            'foreignKey' => 'sellingbill_id'
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
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 255)
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmpty('total');

        $validator
            ->boolean('isaramex')
            ->requirePresence('isaramex', 'create')
            ->notEmpty('isaramex');

        $validator
            ->boolean('ispost')
            ->requirePresence('ispost', 'create')
            ->notEmpty('ispost');

        $validator
            ->scalar('truckingNo')
            ->maxLength('truckingNo', 15)
            ->allowEmpty('truckingNo');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
