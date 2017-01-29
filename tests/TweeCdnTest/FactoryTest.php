<?php
namespace TrueTest\View\Helper;
use TweeCdn\Factory as Factory,
    PHPUnit_Framework_TestCase;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $helper = Factory::factory('simple', array(
            'public_dir' => __DIR__ . '/_files/simple/',
        ));
        $this->assertInstanceOf('TweeCdn\View\Helper\Cdn\Simple', $helper);
    }

    public function testRelease()
    {
        $helper = Factory::factory('simple', array(
            'public_dir' => __DIR__ . '/_files/simple/',
        ));
        $this->assertInstanceOf('TweeCdn\View\Helper\Cdn\Simple', $helper);
    }

    public function testHash()
    {
        $helper = Factory::factory('hash', array(
            'public_dir' => __DIR__ . '/_files/simple/',
            'hashes' => array(),
        ));
        $this->assertInstanceOf('TweeCdn\View\Helper\Cdn\Hash', $helper);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testLoadUnknown()
    {
        $helper = Factory::factory('non-exists', array());
    }
}