<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BuyingbillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BuyingbillsTable Test Case
 */
class BuyingbillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BuyingbillsTable
     */
    public $Buyingbills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.buyingbills',
        'app.boughtproducts',
        'app.products',
        'app.damaged_product',
        'app.returnedproducts',
        'app.soldproducts',
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
        $config = TableRegistry::exists('Buyingbills') ? [] : ['className' => BuyingbillsTable::class];
        $this->Buyingbills = TableRegistry::get('Buyingbills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Buyingbills);

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
