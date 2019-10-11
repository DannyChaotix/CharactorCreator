<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personnage Model
 *
 * @method \App\Model\Entity\Personnage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Personnage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Personnage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personnage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personnage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personnage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Personnage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personnage findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonnageTable extends Table
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

        $this->setTable('personnage');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Nom')
            ->maxLength('Nom', 255)
            ->requirePresence('Nom', 'create')
            ->notEmptyString('Nom');

        $validator
            ->scalar('Description')
            ->maxLength('Description', 255)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->integer('Habiletes')
            ->requirePresence('Habiletes', 'create')
            ->notEmptyString('Habiletes');

        $validator
            ->integer('Allies')
            ->requirePresence('Allies', 'create')
            ->notEmptyString('Allies');

        $validator
            ->integer('Image')
            ->requirePresence('Image', 'create')
            ->notEmptyString('Image');

        return $validator;
    }
}
