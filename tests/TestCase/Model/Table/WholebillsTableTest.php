<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WholebillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WholebillsTable Test Case
 */
class WholebillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WholebillsTable
     */
    public $Wholebills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wholebills',
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
        $config = TableRegistry::exists('Wholebills') ? [] : ['className' => WholebillsTable::class];
        $this->Wholebills = TableRegistry::get('Wholebills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wholebills);

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
