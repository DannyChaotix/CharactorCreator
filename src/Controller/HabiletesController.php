<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Habiletes Controller
 *
 * @property \App\Model\Table\HabiletesTable $Habiletes
 *
 * @method \App\Model\Entity\Habilete[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HabiletesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $habiletes = $this->paginate($this->Habiletes);

        $this->set(compact('habiletes'));
    }

    /**
     * View method
     *
     * @param string|null $id Habilete id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $habilete = $this->Habiletes->get($id, [
            'contain' => []
        ]);

        $this->set('habilete', $habilete);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $habilete = $this->Habiletes->newEntity();
        if ($this->request->is('post')) {
            $habilete = $this->Habiletes->patchEntity($habilete, $this->request->getData());
            if ($this->Habiletes->save($habilete)) {
                $this->Flash->success(__('The habilete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The habilete could not be saved. Please, try again.'));
        }
        $this->set(compact('habilete'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Habilete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $habilete = $this->Habiletes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $habilete = $this->Habiletes->patchEntity($habilete, $this->request->getData());
            if ($this->Habiletes->save($habilete)) {
                $this->Flash->success(__('The habilete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The habilete could not be saved. Please, try again.'));
        }
        $this->set(compact('habilete'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Habilete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $habilete = $this->Habiletes->get($id);
        if ($this->Habiletes->delete($habilete)) {
            $this->Flash->success(__('The habilete has been deleted.'));
        } else {
            $this->Flash->error(__('The habilete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
