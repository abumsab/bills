<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Damagedproduct Controller
 *
 * @property \App\Model\Table\DamagedproductTable $Damagedproduct
 *
 * @method \App\Model\Entity\Damagedproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DamagedproductController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $damagedproduct = $this->paginate($this->Damagedproduct);

        $this->set(compact('damagedproduct'));
    }

    /**
     * View method
     *
     * @param string|null $id Damagedproduct id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $damagedproduct = $this->Damagedproduct->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('damagedproduct', $damagedproduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $damagedproduct = $this->Damagedproduct->newEntity();
        if ($this->request->is('post')) {
            $damagedproduct = $this->Damagedproduct->patchEntity($damagedproduct, $this->request->getData());
            if ($this->Damagedproduct->save($damagedproduct)) {
                $this->Flash->success(__('The damagedproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The damagedproduct could not be saved. Please, try again.'));
        }
        $products = $this->Damagedproduct->Products->find('list', ['limit' => 200]);
        $this->set(compact('damagedproduct', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Damagedproduct id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $damagedproduct = $this->Damagedproduct->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $damagedproduct = $this->Damagedproduct->patchEntity($damagedproduct, $this->request->getData());
            if ($this->Damagedproduct->save($damagedproduct)) {
                $this->Flash->success(__('The damagedproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The damagedproduct could not be saved. Please, try again.'));
        }
        $products = $this->Damagedproduct->Products->find('list', ['limit' => 200]);
        $this->set(compact('damagedproduct', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Damagedproduct id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $damagedproduct = $this->Damagedproduct->get($id);
        if ($this->Damagedproduct->delete($damagedproduct)) {
            $this->Flash->success(__('The damagedproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The damagedproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
