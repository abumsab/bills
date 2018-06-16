<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SoldproductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SoldproductsTable Test Case
 */
class SoldproductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SoldproductsTable
     */
    public $Soldproducts;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Soldproducts') ? [] : ['className' => SoldproductsTable::class];
        $this->Soldproducts = TableRegistry::get('Soldproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Soldproducts);

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
