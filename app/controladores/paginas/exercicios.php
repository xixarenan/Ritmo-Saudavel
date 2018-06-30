<?php

// Importações
require_once(__DIR__ . '/../../database/Exercicios.php');

// Instanciando objeto
$exercicios = new Exercicios;

// Vê o que deve ser feito
if (isset($_GET['get'])) {
	$listarExercicios = false;
	$exercicio = $exercicios->getById(filter_input(INPUT_GET, 'get'));
} else {
	$listarExercicios = true;
	$listaExercicios = $exercicios->getAll();
}

// Chamando view para apresentar os resultados
include(__DIR__ . '/../../views/exercicios.php');