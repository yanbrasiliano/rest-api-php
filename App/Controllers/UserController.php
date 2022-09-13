<?php

namespace App\Controllers;

use App\Services\UserService;

class UserController
{
	public function __construct(
		protected UserService $userService
	) {
		$this->userService = $userService;
	}

	public function getByID(int $id = null)
	{
		return $this->userService->getByID($id);
	}
	public function get(int $id = null)
	{
		return $this->userService->getAll($id);
	}
	public function post(int $id = null)
	{
		return $this->userService->post($id);
	}
	public function delete(int $id = null)
	{
		return $this->userService->delete($id);
	}
}
