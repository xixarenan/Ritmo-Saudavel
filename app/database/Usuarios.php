<?php
require_once('DAO.php');
class Usuarios extends DAO
{
	public function getByUsuario (string $usuario) {
		$query = parent::$db->prepare("select * from Usuarios where usuario = :usuario");
		$query->execute([
			"usuario" => $usuario
		]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function getByEmail (string $email) {
		$query = parent::$db->prepare("select * from Usuarios where email = :email");
		$query->execute([
			"email" => $email
		]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function insert(string $nome, string $email, $altura, $peso, $meta_peso, $data_nasc, string $usuario, string $senha) {
		$query = parent::$db->prepare("insert into Usuarios (nome, email, altura, peso, meta_peso, data_nasc, usuario, senha) values (:nome, :email, :altura, :peso, :meta_peso, :data_nasc, :usuario, :senha)");
		return $query->execute([
			'nome' => $nome,
			'email' => $email,
			'altura' => $altura,
			'peso' => $peso,
			'meta_peso' => $meta_peso,
			'data_nasc' => $data_nasc,
			'usuario' => $usuario,
			'senha' => $senha
		]);
	}
}