<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\BoughtproductsTable|\Cake\ORM\Association\HasMany $Boughtproducts
 * @property \App\Model\Table\DamagedProductTable|\Cake\ORM\Association\HasMany $DamagedProduct
 * @property \App\Model\Table\ReturnedproductsTable|\Cake\ORM\Association\HasMany $Returnedproducts
 * @property \App\Model\Table\SoldproductsTable|\Cake\ORM\Association\HasMany $Soldproducts
 * @property \App\Model\Table\WholesoldproductsTable|\Cake\ORM\Association\HasMany $Wholesoldproducts
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Boughtproducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('DamagedProduct', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Returnedproducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Soldproducts', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('Wholesoldproducts', [
            'foreignKey' => 'product_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->scalar('waranty')
            ->maxLength('waranty', 33)
            ->requirePresence('waranty', 'create')
            ->notEmpty('waranty');

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }

    
}
