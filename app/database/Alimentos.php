<?php
require_once('DAO.php');
class Alimentos extends DAO
{
	public function getAll() {
		$query = parent::$db->prepare('select * from Alimentos order by nome');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getById (int $id) {
		$query = parent::$db->prepare("select * from Alimentos where id = :id");
		$query->execute([
			"id" => $id
		]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function insert(string $nome, string $descricao, $kcal, $carboidrato, $proteina, $gordura, $sodio, string $hash_imagem) {
		$query = parent::$db->prepare("insert into Alimentos (nome, descricao, kcal, carboidrato, proteina, gordura, sodio, hash_imagem) values (:nome, :descricao, :kcal, :carboidrato, :proteina, :gordura, :sodio, :hash_imagem)");
		return $query->execute([
			'nome' => $nome,
			'descricao' => $descricao,
			'kcal' => $kcal,
			'carboidrato' => $carboidrato,
			'proteina' => $proteina,
			'gordura' => $gordura,
			'sodio' => $sodio,
			'hash_imagem' => $hash_imagem
		]);
	}
}