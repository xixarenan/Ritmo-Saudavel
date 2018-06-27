<?php

/*
 * OBS.: são são feitas validações pelo motivo de ser uma prototipação
 * de uma app mobile, o qual não contém métodos fáceis para burlar a própria
 * validação do html 5 que já vem imbutido.
 * 
 * Essa questão de validação vai ficar diretamente relacionada com o prepared
 * statement do banco de dados e com as regras de integridade do mesmo.
 */

// pegando dados do post
$nome		= (isset($_POST['nome'])) 		? $_POST['nome'] 		: null;
$email		= (isset($_POST['email'])) 		? $_POST['email'] 		: null;
$data_nasc	= (isset($_POST['data_nasc'])) 	? $_POST['data_nasc'] 	: null;
$altura		= (isset($_POST['altura'])) 	? $_POST['altura'] 		: null;
$peso		= (isset($_POST['peso'])) 		? $_POST['peso'] 		: null;
$meta_peso	= (isset($_POST['meta_peso'])) 	? $_POST['meta_peso'] 	: null;
$usuario	= (isset($_POST['usuario'])) 	? $_POST['usuario'] 	: null;
$senha		= (isset($_POST['senha'])) 		? $_POST['senha'] 		: null;

// variaveis
$urlindex = '../../../index.php';
$urlback = '../../../registrar.php';
$getback = '?nome=' . urlencode($_POST['nome'])
		 . '&email=' . urlencode($_POST['email'])
		 . '&data_nasc=' . urlencode($_POST['data_nasc'])
		 . '&altura=' . urlencode($_POST['altura'])
		 . '&peso=' . urlencode($_POST['peso'])
		 . '&meta_peso=' . urlencode($_POST['meta_peso'])
		 . '&usuario=' . urlencode($_POST['usuario']);

// conectando ao banco de dados
require_once(__DIR__ . '/../../database/Usuarios.php');
$usuarios = new Usuarios;

// validando e-mail
if (is_array($usuarios->getByEmail($email))) {
	header('Location: ' . $urlback . $getback . '&msg=' . urlencode('Este e-mail já está sendo usado.'));
	exit();
}

// validando usuario
if (is_array($usuarios->getByUsuario($usuario))) {
	header('Location: ' . $urlback . $getback . '&msg=' . urlencode('Este usuário já está sendo usado.'));
	exit();
}

// validando tamanho minimo da senha
if (strlen($senha) < 10) {
	header('Location: ' . $urlback . $getback . '&msg=' . urlencode('A senha deve conter pelo menos 10 caracteres.'));
	exit();
}

// gravando usuario no banco
if ($usuarios->insert($nome, $email, $altura, $peso, $meta_peso, $data_nasc, $usuario, password_hash($senha, PASSWORD_DEFAULT))) {
	// se gravou com sucesso, vai para a dashboard
	@session_start();
	$_SESSION["userInfo"]["usuario"] = $usuario;
	header('Location: ' . $urlindex);
	exit();
} else {
	// senao retorna com erro
	header('Location: ' . $urlback . $getback . '&msg=' . urlencode('Estamos enfrentando problemas, tente novamente em alguns instantes.'));
	exit();
}