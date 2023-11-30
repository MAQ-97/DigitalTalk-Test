<?php

namespace DTApi\Test\Unit;

use DTApi\Helpers\TeHelper;
use Illuminate\Foundation\Testing\TestCase;

class TeHelperTest extends TestCase{
	public function testExpireFunction()
	{
		$expire = TeHelper::willExpireAt('2/12/2023','3/12/2023');

		$this->assertEquals('2023-02-10 00:00:00', $expire);
	}
}
