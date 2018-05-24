<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GalleryPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GalleryPhotosTable Test Case
 */
class GalleryPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GalleryPhotosTable
     */
    public $GalleryPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gallery_photos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GalleryPhotos') ? [] : ['className' => GalleryPhotosTable::class];
        $this->GalleryPhotos = TableRegistry::get('GalleryPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GalleryPhotos);

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
