<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SoldproductsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SoldproductsController Test Case
 */
class SoldproductsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.soldproducts',
        'app.sellingbills',
        'app.customers',
        'app.returnedproducts',
        'app.products',
        'app.boughtproducts',
        'app.buyingbills',
        'app.damaged_product',
        'app.wholesoldproducts'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
