<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeContents Model
 *
 * @method \App\Model\Entity\HomeContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeContent findOrCreate($search, callable $callback = null, $options = [])
 */
class HomeContentsTable extends Table
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

        $this->setTable('home_contents');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 256)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 1024)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 256)
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        return $validator;
    }
}
