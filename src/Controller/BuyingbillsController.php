<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Buyingbills Controller
 *
 * @property \App\Model\Table\BuyingbillsTable $Buyingbills
 *
 * @method \App\Model\Entity\Buyingbill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BuyingbillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $buyingbills = $this->paginate($this->Buyingbills);

        $this->set(compact('buyingbills'));
    }

    /**
     * View method
     *
     * @param string|null $id Buyingbill id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $buyingbill = $this->Buyingbills->get($id, [
            'contain' => ['Boughtproducts']
        ]);

        $this->set('buyingbill', $buyingbill);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $buyingbill = $this->Buyingbills->newEntity();
        if ($this->request->is('post')) {
            $buyingbill = $this->Buyingbills->patchEntity($buyingbill, $this->request->getData());
            if ($this->Buyingbills->save($buyingbill)) {
                $this->Flash->success(__('The buyingbill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyingbill could not be saved. Please, try again.'));
        }
        $this->set(compact('buyingbill'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Buyingbill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $buyingbill = $this->Buyingbills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $buyingbill = $this->Buyingbills->patchEntity($buyingbill, $this->request->getData());
            if ($this->Buyingbills->save($buyingbill)) {
                $this->Flash->success(__('The buyingbill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyingbill could not be saved. Please, try again.'));
        }
        $this->set(compact('buyingbill'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Buyingbill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $buyingbill = $this->Buyingbills->get($id);
        if ($this->Buyingbills->delete($buyingbill)) {
            $this->Flash->success(__('The buyingbill has been deleted.'));
        } else {
            $this->Flash->error(__('The buyingbill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
