<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Soldproducts Controller
 *
 * @property \App\Model\Table\SoldproductsTable $Soldproducts
 *
 * @method \App\Model\Entity\Soldproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SoldproductsController extends AppController
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
        $soldproducts = $this->paginate($this->Soldproducts);

        $this->set(compact('soldproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Soldproduct id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $soldproduct = $this->Soldproducts->get($id, [
            'contain' => ['Sellingbills', 'Products']
        ]);

        $this->set('soldproduct', $soldproduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $soldproduct = $this->Soldproducts->newEntity();
        if ($this->request->is('post')) {
            $soldproduct = $this->Soldproducts->patchEntity($soldproduct, $this->request->getData());

            $soldproduct->sellingbill_id = $this->request->getData()['sellingbills'];
            $soldproduct->product_id =  $this->request->getData()['products'];
            //var_dump(expression)
            var_dump($soldproduct);
            if ($this->Soldproducts->save($soldproduct)) {

                $this->Flash->success(__('The soldproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soldproduct could not be saved. Please, try again.'));
        }
        $sellingbills = $this->Soldproducts->Sellingbills->find('list', ['limit' => 200]);
        $products = $this->Soldproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('soldproduct', 'sellingbills', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Soldproduct id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $soldproduct = $this->Soldproducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $soldproduct = $this->Soldproducts->patchEntity($soldproduct, $this->request->getData());
            if ($this->Soldproducts->save($soldproduct)) {
                $this->Flash->success(__('The soldproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soldproduct could not be saved. Please, try again.'));
        }
        $sellingbills = $this->Soldproducts->Sellingbills->find('list', ['limit' => 200]);
        $products = $this->Soldproducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('soldproduct', 'sellingbills', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Soldproduct id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($pid = null, $bid=null)
    {
       
        $this->request->allowMethod(['post', 'delete']);
        $soldproduct = $this->Soldproducts->find()
        ->where(['product_id =' => $pid ,'sellingbill_id ='=> $bid])->firstOrFail();

        if ($this->Soldproducts->delete($soldproduct)) {
            $this->Flash->success(__('The soldproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The soldproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
