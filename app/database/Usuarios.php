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
}