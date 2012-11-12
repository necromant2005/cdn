<?php
namespace TrueTest\View\Helper;
use PHPUnit_Framework_TestCase,
	Twee\View\Helper\Cdn\Release as CdnRelease;

class ReleaseTest extends PHPUnit_Framework_TestCase
{
	public function testRelease()
	{
		$helper = new CdnRelease(array(
			'release' => '20121112064617',
		));
		$this->assertEquals('/css/20121112064617/x.css', $helper('/css/x.css'));
	}

	public function testReleaseMainPath()
	{
		$helper = new CdnRelease(array(
			'release' => '20121112064617',
		));
		$this->assertEquals('/favicon.ico', $helper('/favicon.ico'));
	}

	public function testReleaseRelatinalPath()
	{
		$helper = new CdnRelease(array(
			'release' => '20121112064617',
		));
		$this->assertEquals('x.css', $helper('x.css'));
	}
}