<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GameUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GameUsersTable Test Case
 */
class GameUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GameUsersTable
     */
    public $GameUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.game_users',
        'app.allies',
        'app.ally_ranks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GameUsers') ? [] : ['className' => 'App\Model\Table\GameUsersTable'];
        $this->GameUsers = TableRegistry::get('GameUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GameUsers);

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
