<?php
namespace Phi\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use Phi\Controller\Component\ImageComponent;

/**
 * Phi\Controller\Component\ImageComponent Test Case
 */
class ImageComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Phi\Controller\Component\ImageComponent
     */
    public $Image;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Image = new ImageComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Image);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
