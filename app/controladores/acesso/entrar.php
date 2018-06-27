<?php

// pegando dados do post
$usuario	= (isset($_POST['usuario'])) 	? $_POST['usuario'] 	: null;
$senha		= (isset($_POST['senha'])) 		? $_POST['senha'] 		: null;

// variaveis
$urlindex = '../../../index.php';
$getback = '?usuario=' . urlencode($_POST['usuario']);

// conectando ao banco de dados
require_once(__DIR__ . '/../../database/Usuarios.php');
$usuarios = new Usuarios;

// consultando banco
$userInfo = $usuarios->getByUsuario($usuario);

// vendo se existe o usuario no banco
if (!is_array($userInfo)) {
	header('Location: ' . $urlindex . $getback . '&msg=' . urlencode('Este usuário não existe.'));
	exit();
}

// verificando senha do usuario
$senhaDoBanco = $userInfo['senha'];
if (!password_verify($senha, $senhaDoBanco)) {
	header('Location: ' . $urlindex . $getback . '&msg=' . urlencode('Senha inválida.'));
	exit();
}

// chega ate aqui se o usuario tem as credenciais validas
@session_start();
$_SESSION["userInfo"]["usuario"] = $usuario;
header('Location: ' . $urlindex);
exit();