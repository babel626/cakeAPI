<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeContentsTable Test Case
 */
class HomeContentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeContentsTable
     */
    public $HomeContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_contents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HomeContents') ? [] : ['className' => HomeContentsTable::class];
        $this->HomeContents = TableRegistry::get('HomeContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeContents);

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
