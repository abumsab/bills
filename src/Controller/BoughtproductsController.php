<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boughtproducts Controller
 *
 * @property \App\Model\Table\BoughtproductsTable $Boughtproducts
 *
 * @method \App\Model\Entity\Boughtproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BoughtproductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Buyingbills', 'Products']
        ];
        $boughtproducts = $this->paginate($this->Boughtproducts);

        $this->set(compact('boughtproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Boughtproduct id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boughtproduct = $this->Boughtproducts->get($id, [
            'contain' => ['Buyingbills', 'Products']
        ]);

        $this->set('boughtproduct', $boughtproduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $boughtproduct = $this->Boughtproducts->newEntity();
        if ($this->request->is('post')) {
            $boughtproduct = $this->Boughtproducts->patchEntity($boughtproduct, $this->request->getData());
            if ($this->Boughtproducts->save($boughtproduct)) {
                $this->Flash->success(__('The boughtproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boughtproduct could not be saved. Please, try again.'));
        }
        $buyingbills = $this->Boughtproducts->Buyingbills->find('list', ['limit' => 200]);
        $products = $this->Boughtproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('boughtproduct', 'buyingbills', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Boughtproduct id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $boughtproduct = $this->Boughtproducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boughtproduct = $this->Boughtproducts->patchEntity($boughtproduct, $this->request->getData());
            if ($this->Boughtproducts->save($boughtproduct)) {
                $this->Flash->success(__('The boughtproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boughtproduct could not be saved. Please, try again.'));
        }
        $buyingbills = $this->Boughtproducts->Buyingbills->find('list', ['limit' => 200]);
        $products = $this->Boughtproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('boughtproduct', 'buyingbills', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Boughtproduct id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boughtproduct = $this->Boughtproducts->get($id);
        if ($this->Boughtproducts->delete($boughtproduct)) {
            $this->Flash->success(__('The boughtproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The boughtproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
