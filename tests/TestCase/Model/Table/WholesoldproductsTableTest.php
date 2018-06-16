<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WholesoldproductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WholesoldproductsTable Test Case
 */
class WholesoldproductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WholesoldproductsTable
     */
    public $Wholesoldproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wholesoldproducts',
        'app.wholebills',
        'app.products',
        'app.boughtproducts',
        'app.buyingbills',
        'app.damaged_product',
        'app.returnedproducts',
        'app.sellingbills',
        'app.customers',
        'app.soldproducts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Wholesoldproducts') ? [] : ['className' => WholesoldproductsTable::class];
        $this->Wholesoldproducts = TableRegistry::get('Wholesoldproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wholesoldproducts);

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
