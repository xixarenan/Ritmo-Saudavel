<?php
// Inicia / Resume a sessão
@session_start();

// Verifica permissões e status
if (isset($_SESSION["userInfo"]["usuario"])) { // usuario definido, mantem informacoes dele atualizadas
	require_once(__DIR__ . '/../../database/Usuarios.php');
	$usuarios = new Usuarios;
	$userInfo = $usuarios->getByUsuario($_SESSION["userInfo"]["usuario"]);

	if (is_array($userInfo)) {
		$_SESSION["userInfo"]["id"] = $userInfo["id"];
		$_SESSION["userInfo"]["nome"] = $userInfo["nome"];
		$_SESSION["userInfo"]["email"] = $userInfo["email"];
		$_SESSION["userInfo"]["altura"] = $userInfo["altura"];
		$_SESSION["userInfo"]["peso"] = $userInfo["peso"];
		$_SESSION["userInfo"]["meta_peso"] = $userInfo["meta_peso"];
		$_SESSION["userInfo"]["data_nasc"] = $userInfo["data_nasc"];
	} else {
		unset($_SESSION['userInfo']);
	}
}

// Se não possui sessão correta, destroy a ativa e manda pro login
if (!isset($_SESSION["userInfo"]["usuario"])) {
	@session_destroy();
	require_once(__DIR__ . '/../../views/login.php');
}