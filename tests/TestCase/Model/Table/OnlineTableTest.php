<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OnlineTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OnlineTable Test Case
 */
class OnlineTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OnlineTable
     */
    public $Online;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.online'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Online') ? [] : ['className' => 'App\Model\Table\OnlineTable'];
        $this->Online = TableRegistry::get('Online', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Online);

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
}
