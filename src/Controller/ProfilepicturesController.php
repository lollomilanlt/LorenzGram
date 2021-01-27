<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profilepictures Controller
 *
 * @property \App\Model\Table\ProfilepicturesTable $Profilepictures
 * @method \App\Model\Entity\Profilepicture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilepicturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $profilepictures = $this->paginate($this->Profilepictures);

        $this->set(compact('profilepictures'));
    }

    /**
     * View method
     *
     * @param string|null $id Profilepicture id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profilepicture = $this->Profilepictures->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('profilepicture'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profilepicture = $this->Profilepictures->newEmptyEntity();
        if ($this->request->is('post')) {
            $profilepicture = $this->Profilepictures->patchEntity($profilepicture, $this->request->getData());
            if ($this->Profilepictures->save($profilepicture)) {
                $this->Flash->success(__('The profilepicture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profilepicture could not be saved. Please, try again.'));
        }
        $this->set(compact('profilepicture'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profilepicture id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profilepicture = $this->Profilepictures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profilepicture = $this->Profilepictures->patchEntity($profilepicture, $this->request->getData());
            if ($this->Profilepictures->save($profilepicture)) {
                $this->Flash->success(__('The profilepicture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profilepicture could not be saved. Please, try again.'));
        }
        $this->set(compact('profilepicture'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profilepicture id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profilepicture = $this->Profilepictures->get($id);
        if ($this->Profilepictures->delete($profilepicture)) {
            $this->Flash->success(__('The profilepicture has been deleted.'));
        } else {
            $this->Flash->error(__('The profilepicture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
