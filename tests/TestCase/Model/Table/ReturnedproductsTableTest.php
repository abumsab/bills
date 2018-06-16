<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReturnedproductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReturnedproductsTable Test Case
 */
class ReturnedproductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReturnedproductsTable
     */
    public $Returnedproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.returnedproducts',
        'app.sellingbills',
        'app.customers',
        'app.soldproducts',
        'app.products',
        'app.boughtproducts',
        'app.buyingbills',
        'app.damaged_product',
        'app.wholesoldproducts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Returnedproducts') ? [] : ['className' => ReturnedproductsTable::class];
        $this->Returnedproducts = TableRegistry::get('Returnedproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Returnedproducts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
