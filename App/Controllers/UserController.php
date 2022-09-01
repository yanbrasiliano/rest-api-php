<?php

namespace App\Controllers;

use App\Services\UserService;

class UserController
{
	public function getByID(int $id = null)
	{
		return UserService::getByID($id);
	}
}
