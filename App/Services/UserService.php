<?php

namespace App\Services;

use App\Interfaces\CrudInterface as CRUD;
use PDOException;

class UserService implements CRUD
{
	public function getById(int $id)
	{
		try {
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
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function getAll(int $id)
	{
		try {
			$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

			$sql = "SELECT * FROM users";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			if ($stmt->rowCount() > 0) {
				return $stmt->fetch(\PDO::FETCH_ASSOC);
			} else {
				throw new \Exception("No users found.");
			}
		} catch (\PDOException $e) {
			return $e->getMessage();
		}
	}

	public function post($data)
	{
		try {
			$conn = new \PDO(DBDRIVE . ': host=' . DBHOST . '; dbname=' . DBNAME, DBUSER, DBPASS);

			$sql = 'INSERT INTO ' . self::$table . ' (email, password, name) VALUES (:em, :pa, :na)';
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':em', $data['email']);
			$stmt->bindValue(':pa', $data['password']);
			$stmt->bindValue(':na', $data['name']);
			$stmt->execute();
			if ($stmt->rowCount() > 0) {
				return 'User created successfully!';
			} else {
				throw new \Exception("Failed to created user!");
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public function delete(int $id)
	{
		//
	}
	public function update(int $id)
	{
		//
	}
}
