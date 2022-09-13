<?php

namespace App\Interfaces;

interface CrudInterface
{
	public function getById(int $id);

	public function getAll(int $id);

	public function post($data);

	public function update(int $id);

	public function delete(int $id);
}
