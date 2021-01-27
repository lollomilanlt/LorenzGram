<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sends Model
 *
 * @method \App\Model\Entity\Send newEmptyEntity()
 * @method \App\Model\Entity\Send newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Send[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Send get($primaryKey, $options = [])
 * @method \App\Model\Entity\Send findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Send patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Send[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Send|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Send saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Send[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Send[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Send[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Send[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SendsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sends');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('chrono')
            ->requirePresence('chrono', 'create')
            ->notEmptyDate('chrono');

        $validator
            ->integer('id_sender')
            ->requirePresence('id_sender', 'create')
            ->notEmptyString('id_sender');

        $validator
            ->integer('id_receiver')
            ->requirePresence('id_receiver', 'create')
            ->notEmptyString('id_receiver');

        $validator
            ->scalar('text')
            ->maxLength('text', 255)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        return $validator;
    }
}
