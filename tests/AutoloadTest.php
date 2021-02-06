<?php

use PHPUnit\Framework\TestCase;
use spitfire\exceptions\ApplicationException;

class AutoloadTest extends TestCase
{
	
	public function testThrow()
	{
		$this->expectException(ApplicationException::class);
		throw new ApplicationException('Test');
	}
}
