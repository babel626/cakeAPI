<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GalleryPhotos Model
 *
 * @method \App\Model\Entity\GalleryPhoto get($primaryKey, $options = [])
 * @method \App\Model\Entity\GalleryPhoto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GalleryPhoto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPhoto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GalleryPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPhoto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPhoto findOrCreate($search, callable $callback = null, $options = [])
 */
class GalleryPhotosTable extends Table
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

        $this->setTable('gallery_photos');
        $this->setDisplayField('id');
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
            ->scalar('src')
            ->maxLength('src', 258)
            ->requirePresence('src', 'create')
            ->notEmpty('src');

        return $validator;
    }
}
