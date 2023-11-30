<?php

namespace DTApi\Test\Unit;

use DTApi\Repository\UserRepository;
use Illuminate\Foundation\Testing\TestCase;

class UserRepositoryTest extends TestCase{
	public function testExpireFunction()
	{
		$user_repo = new UserRepository();

		$data = [];
		$data['user_type'] = 2;
		$data['name'] = 'Muhammad';
		$data['company_id'] = 0;
		$data['department_id'] = 0;
		$data['email'] = 'asad.muhammad.qazi@gmail.com';
		$data['dob_or_orgid'] = '11/12/1997';
		$data['phone'] = '03022501700';
		$data['mobile'] = '03022501700';

		$user = $user_repo->createOrUpdate($data);

		$this->assertDatabaseHas('users',[
			'id' => $user->id
		]);
	}
}
