<?php

namespace App\Interfaces;

interface CrudInterface
{
	public static function getById(int $id);

	public static function getAll(int $id);

	// public function post();

	// public function update();

	// public function delete();
}
