<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DamagedproductTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DamagedproductTable Test Case
 */
class DamagedproductTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DamagedproductTable
     */
    public $Damagedproduct;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.damagedproduct',
        'app.products',
        'app.boughtproducts',
        'app.buyingbills',
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
        $config = TableRegistry::exists('Damagedproduct') ? [] : ['className' => DamagedproductTable::class];
        $this->Damagedproduct = TableRegistry::get('Damagedproduct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Damagedproduct);

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
