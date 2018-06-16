<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\ProductsController;
use Cake\ORM\TableRegistry;

/**
 * Sellingbills Controller
 *
 * @property \App\Model\Table\SellingbillsTable $Sellingbills
 *
 * @method \App\Model\Entity\Sellingbill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SellingbillsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
        $this->Auth->allow(['view']);
        //$this->loadComponent('RequestHandler')
         // Include the FlashComponent
    }


    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $sellingbills = $this->paginate($this->Sellingbills);

        $this->set(compact('sellingbills'));
    }

    /**
     * View method
     *
     * @param string|null $id Sellingbill id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sellingbill = $this->Sellingbills->get($id, [
            'contain' => ['Customers', 'Returnedproducts', 'Soldproducts']
        ]);
        $Products = TableRegistry::get('Products');
        foreach ($sellingbill->soldproducts as $soldproduct ) {
            
            $porduct = $Products->findById($soldproduct->product_id)->firstOrFail();
            
            $soldproduct->product_name = $porduct->name;
            $soldproduct->product_price = $porduct->price;
            $soldproduct->product_waranty = $porduct->waranty;

        }
        
        $this->set('sellingbill', $sellingbill);
        

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sellingbill = $this->Sellingbills->newEntity();

        if ($this->request->is('post')) {
            $sellingbill = $this->Sellingbills->patchEntity($sellingbill, $this->request->getData());
            $sellingbill->user_name = 'mm';
            if ($this->Sellingbills->save($sellingbill)) {
                $this->Flash->success(__('The sellingbill has been saved.'));
                
            $data= $this->request->getData()['Soldproducts'];
            $billsProducts = $this->getSoldProducts($data, intval($sellingbill->id));
               
                $Soldproducts = TableRegistry::get('Soldproducts');
                foreach ($billsProducts as $soldproduct ) {
                    if($Soldproducts->save($soldproduct)){
                    $this->Flash->success(__('The soldproduct ('. $soldproduct->product_id.') has been saved.'));
                }else $this->Flash->error(__('The soldproduct  ('. $soldproduct->product_id.')has not been saved.'));
                }
                // if($Soldproducts->save($soldproduct)){
                //     $this->Flash->success(__('The soldproduct has been saved.'));
                // }else $this->Flash->error(__('The soldproduct has not been saved.'));
                return $this->redirect(['action' => 'add/']);

                // return $this->redirect(['action' => 'view/'.$sellingbill->id]);
            }
            $this->Flash->error(__('The sellingbill could not be saved. Please, try again.'));
        }
       

        $this->set(compact('sellingbill'));
    }

    private function getSoldProducts($data , $id){
        $Soldproducts= array();
        $quarry = TableRegistry::get('Soldproducts');
        $i = 0;
        foreach ($data as $soldproduct) {
           // var_dump($soldproduct);
            if(intval($soldproduct["quantity"])>0){
                $temp = $quarry->newEntity();
            $temp->sellingbill_id= $id;
            $temp->product_id = intval($soldproduct["product_id"]);
            $temp->quantity = intval($soldproduct["quantity"]);
            $temp->total = intval($soldproduct["total"]);
                

            $Soldproducts[$i]= $temp;
            $i = $i+1;
            }

        }
        
        return $Soldproducts;

        
    }



    /**
     * Edit method
     *
     * @param string|null $id Sellingbill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sellingbill = $this->Sellingbills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sellingbill = $this->Sellingbills->patchEntity($sellingbill, $this->request->getData());
            if ($this->Sellingbills->save($sellingbill)) {
                $this->Flash->success(__('The sellingbill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sellingbill could not be saved. Please, try again.'));
        }
        $customers = $this->Sellingbills->Customers->find('list', ['limit' => 200]);
        $this->set(compact('sellingbill', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sellingbill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sellingbill = $this->Sellingbills->get($id);
        if ($this->Sellingbills->delete($sellingbill)) {
            $this->Flash->success(__('The sellingbill has been deleted.'));
        } else {
            $this->Flash->error(__('The sellingbill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
