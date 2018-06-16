<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Buyingbills Model
 *
 * @property \App\Model\Table\BoughtproductsTable|\Cake\ORM\Association\HasMany $Boughtproducts
 *
 * @method \App\Model\Entity\Buyingbill get($primaryKey, $options = [])
 * @method \App\Model\Entity\Buyingbill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Buyingbill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Buyingbill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Buyingbill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Buyingbill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Buyingbill findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BuyingbillsTable extends Table
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

        $this->setTable('buyingbills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Boughtproducts', [
            'foreignKey' => 'buyingbill_id'
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_name',
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
            ->scalar('provider')
            ->maxLength('provider', 20)
            ->allowEmpty('provider');

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

        return $rules;
    }
}
