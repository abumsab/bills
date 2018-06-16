<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wholesoldproducts Controller
 *
 * @property \App\Model\Table\WholesoldproductsTable $Wholesoldproducts
 *
 * @method \App\Model\Entity\Wholesoldproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WholesoldproductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wholebills', 'Products']
        ];
        $wholesoldproducts = $this->paginate($this->Wholesoldproducts);

        $this->set(compact('wholesoldproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Wholesoldproduct id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wholesoldproduct = $this->Wholesoldproducts->get($id, [
            'contain' => ['Wholebills', 'Products']
        ]);

        $this->set('wholesoldproduct', $wholesoldproduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wholesoldproduct = $this->Wholesoldproducts->newEntity();
        if ($this->request->is('post')) {
            $wholesoldproduct = $this->Wholesoldproducts->patchEntity($wholesoldproduct, $this->request->getData());
            if ($this->Wholesoldproducts->save($wholesoldproduct)) {
                $this->Flash->success(__('The wholesoldproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesoldproduct could not be saved. Please, try again.'));
        }
        $wholebills = $this->Wholesoldproducts->Wholebills->find('list', ['limit' => 200]);
        $products = $this->Wholesoldproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('wholesoldproduct', 'wholebills', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wholesoldproduct id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wholesoldproduct = $this->Wholesoldproducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wholesoldproduct = $this->Wholesoldproducts->patchEntity($wholesoldproduct, $this->request->getData());
            if ($this->Wholesoldproducts->save($wholesoldproduct)) {
                $this->Flash->success(__('The wholesoldproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wholesoldproduct could not be saved. Please, try again.'));
        }
        $wholebills = $this->Wholesoldproducts->Wholebills->find('list', ['limit' => 200]);
        $products = $this->Wholesoldproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('wholesoldproduct', 'wholebills', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wholesoldproduct id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wholesoldproduct = $this->Wholesoldproducts->get($id);
        if ($this->Wholesoldproducts->delete($wholesoldproduct)) {
            $this->Flash->success(__('The wholesoldproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The wholesoldproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
