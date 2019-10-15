<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpiresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpiresTable Test Case
 */
class EmpiresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpiresTable
     */
    public $Empires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Empires'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Empires') ? [] : ['className' => EmpiresTable::class];
        $this->Empires = TableRegistry::getTableLocator()->get('Empires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Empires);

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
