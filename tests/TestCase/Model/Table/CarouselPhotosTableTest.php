<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarouselPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarouselPhotosTable Test Case
 */
class CarouselPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarouselPhotosTable
     */
    public $CarouselPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carousel_photos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CarouselPhotos') ? [] : ['className' => CarouselPhotosTable::class];
        $this->CarouselPhotos = TableRegistry::get('CarouselPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarouselPhotos);

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
