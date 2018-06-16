<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SellingbillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SellingbillsTable Test Case
 */
class SellingbillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SellingbillsTable
     */
    public $Sellingbills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sellingbills',
        'app.customers',
        'app.returnedproducts',
        'app.products',
        'app.boughtproducts',
        'app.buyingbills',
        'app.damaged_product',
        'app.soldproducts',
        'app.wholesoldproducts',
        'app.wholebills'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sellingbills') ? [] : ['className' => SellingbillsTable::class];
        $this->Sellingbills = TableRegistry::get('Sellingbills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sellingbills);

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
