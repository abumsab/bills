<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Damagedproduct Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Damagedproduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\Damagedproduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Damagedproduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Damagedproduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Damagedproduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Damagedproduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Damagedproduct findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DamagedproductTable extends Table
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

        $this->setTable('damagedproduct');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
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
            ->scalar('user_name')
            ->maxLength('user_name', 12)
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name');

        $validator
            ->integer('quatiny')
            ->requirePresence('quatiny', 'create')
            ->notEmpty('quatiny');

        $validator
            ->integer('note')
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        $validator
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
