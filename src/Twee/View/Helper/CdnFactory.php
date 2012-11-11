<?php
namespace Twee\View\Helper;
use InvalidArgumentException;

class CdnFactory
{
	public static function factory($name, array $options)
	{
		if ($name == 'simple') {
			return new Cdn\Simple($options);
		}
		throw new InvalidArgumentException('Unknow exctention ' . $name);
	}
}