<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wholebills Controller
 *
 * @property \App\Model\Table\WholebillsTable $Wholebills
 *
 * @method \App\Model\Entity\Wholebill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WholebillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $wholebills = $this->paginate($this->Wholebills);

        $this->set(compact('wholebills'));
    }

    /**
     * View method
     *
     * @param string|null $id Wholebill id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wholebill = $this->Wholebills->get($id, [
            'contain' => ['Wholesoldproducts']
        ]);

        $this->set('wholebill', $wholebill);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wholebill = $this->Wholebills->newEntity();
        if ($this->request->is('post')) {
            $wholebill = $this->Wholebills->patchEntity($wholebill, $this->request->getData());
            if ($this->Wholebills->save($wholebill)) {
                $this->Flash->success(__('The wholebill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholebill could not be saved. Please, try again.'));
        }
        $this->set(compact('wholebill'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wholebill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wholebill = $this->Wholebills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wholebill = $this->Wholebills->patchEntity($wholebill, $this->request->getData());
            if ($this->Wholebills->save($wholebill)) {
                $this->Flash->success(__('The wholebill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholebill could not be saved. Please, try again.'));
        }
        $this->set(compact('wholebill'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wholebill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wholebill = $this->Wholebills->get($id);
        if ($this->Wholebills->delete($wholebill)) {
            $this->Flash->success(__('The wholebill has been deleted.'));
        } else {
            $this->Flash->error(__('The wholebill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
