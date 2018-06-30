<?php
require_once('DAO.php');
class Exercicios extends DAO
{
	public function getAll() {
		$query = parent::$db->prepare('select * from Exercicios order by nome');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getById (int $id) {
		$query = parent::$db->prepare("select * from Exercicios where id = :id");
		$query->execute([
			"id" => $id
		]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}