<?php

namespace App\Services;

use App\Interfaces\CrudInterface as Crud;

class UserService implements Crud
{
	public static function getById(int $id)
	{
		$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

		$sql = "SELECT * FROM users WHERE id = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			return $stmt->fetch(\PDO::FETCH_ASSOC);
		} else {
			throw new \Exception("No user id found.");
		}
	}

	public static function getAll(int $id)
	{
		$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

		$sql = "SELECT * FROM users";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			return $stmt->fetch(\PDO::FETCH_ASSOC);
		} else {
			throw new \Exception("No users found.");
		}
	}
}
