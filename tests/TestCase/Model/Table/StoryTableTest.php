<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoryTable Test Case
 */
class StoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StoryTable
     */
    public $Story;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.story'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Story') ? [] : ['className' => 'App\Model\Table\StoryTable'];
        $this->Story = TableRegistry::get('Story', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Story);

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
