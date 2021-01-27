<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sends Controller
 *
 * @property \App\Model\Table\SendsTable $Sends
 * @method \App\Model\Entity\Send[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SendsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $sends = $this->paginate($this->Sends);

        $this->set(compact('sends'));
    }

    /**
     * View method
     *
     * @param string|null $id Send id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $send = $this->Sends->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('send'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $send = $this->Sends->newEmptyEntity();
        if ($this->request->is('post')) {
            $send = $this->Sends->patchEntity($send, $this->request->getData());
            if ($this->Sends->save($send)) {
                $this->Flash->success(__('The send has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The send could not be saved. Please, try again.'));
        }
        $this->set(compact('send'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Send id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $send = $this->Sends->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $send = $this->Sends->patchEntity($send, $this->request->getData());
            if ($this->Sends->save($send)) {
                $this->Flash->success(__('The send has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The send could not be saved. Please, try again.'));
        }
        $this->set(compact('send'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Send id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $send = $this->Sends->get($id);
        if ($this->Sends->delete($send)) {
            $this->Flash->success(__('The send has been deleted.'));
        } else {
            $this->Flash->error(__('The send could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
