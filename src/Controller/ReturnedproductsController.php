<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Returnedproducts Controller
 *
 * @property \App\Model\Table\ReturnedproductsTable $Returnedproducts
 *
 * @method \App\Model\Entity\Returnedproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReturnedproductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sellingbills', 'Products']
        ];
        $returnedproducts = $this->paginate($this->Returnedproducts);

        $this->set(compact('returnedproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Returnedproduct id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $returnedproduct = $this->Returnedproducts->get($id, [
            'contain' => ['Sellingbills', 'Products']
        ]);

        $this->set('returnedproduct', $returnedproduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $returnedproduct = $this->Returnedproducts->newEntity();
        if ($this->request->is('post')) {
            $returnedproduct = $this->Returnedproducts->patchEntity($returnedproduct, $this->request->getData());
            if ($this->Returnedproducts->save($returnedproduct)) {
                $this->Flash->success(__('The returnedproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The returnedproduct could not be saved. Please, try again.'));
        }
        $sellingbills = $this->Returnedproducts->Sellingbills->find('list', ['limit' => 200]);
        $products = $this->Returnedproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('returnedproduct', 'sellingbills', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Returnedproduct id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $returnedproduct = $this->Returnedproducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $returnedproduct = $this->Returnedproducts->patchEntity($returnedproduct, $this->request->getData());
            if ($this->Returnedproducts->save($returnedproduct)) {
                $this->Flash->success(__('The returnedproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The returnedproduct could not be saved. Please, try again.'));
        }
        $sellingbills = $this->Returnedproducts->Sellingbills->find('list', ['limit' => 200]);
        $products = $this->Returnedproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('returnedproduct', 'sellingbills', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Returnedproduct id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $returnedproduct = $this->Returnedproducts->get($id);
        if ($this->Returnedproducts->delete($returnedproduct)) {
            $this->Flash->success(__('The returnedproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The returnedproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
