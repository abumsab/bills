<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoughtproductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoughtproductsTable Test Case
 */
class BoughtproductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BoughtproductsTable
     */
    public $Boughtproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.boughtproducts',
        'app.buyingbills',
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
        $config = TableRegistry::exists('Boughtproducts') ? [] : ['className' => BoughtproductsTable::class];
        $this->Boughtproducts = TableRegistry::get('Boughtproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Boughtproducts);

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
