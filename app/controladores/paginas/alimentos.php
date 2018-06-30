<?php

// Importações
require_once(__DIR__ . '/../../database/Alimentos.php');

// Instanciando objeto
$alimentos = new Alimentos;

// Vê o que deve ser feito
if (isset($_POST['flow'])) {
	
	/*
	* OBS.: são são feitas validações pelo motivo de ser uma prototipação
	* de uma app mobile, o qual não contém métodos fáceis para burlar a própria
	* validação do html 5 que já vem embutido.
	* 
	* Essa questão de validação vai ficar diretamente relacionada com o prepared
	* statement do banco de dados e com as regras de integridade do mesmo.
	*/

	// pegando dados
	$nome = (isset($_POST['nome'])) ? $_POST['nome'] : null;
	$descricao = (isset($_POST['descricao'])) ? $_POST['descricao'] : null;
	$kcal = (isset($_POST['kcal'])) ? $_POST['kcal'] : null;
	$carboidrato = (isset($_POST['carboidrato'])) ? $_POST['carboidrato'] : null;
	$proteina = (isset($_POST['proteina'])) ? $_POST['proteina'] : null;
	$gordura = (isset($_POST['gordura'])) ? $_POST['gordura'] : null;
	$sodio = (isset($_POST['sodio'])) ? $_POST['sodio'] : null;

	// trabalhando com o arquivo enviado
	$tiposPermitidos = ['jpg', 'jpeg', 'png'];
	$tipoArquivo = explode('.', $_FILES['imagem']['name']);
	$tipoArquivo = $tipoArquivo[count($tipoArquivo) - 1];
	if (in_array($tipoArquivo, $tiposPermitidos)) {
		$localTemporarioArquivo = $_FILES['imagem']['tmp_name'];
		$erroArquivo = $_FILES['imagem']['error'];
		if ($erroArquivo != UPLOAD_ERR_OK) {
			$mensagem = "Houve um problema ao enviar o seu arquivo, tente novamente.";
			$mostrarForm = true;
		} else {
			// convertendo arquivos e salvando
			$hash_imagem = md5(uniqid(rand(), true));
			$caminhoParaSalvar = __DIR__ . '/../../../assets/img/alimentos/' . $hash_imagem . '.jpg';
			if ($tipoArquivo == 'png') {
				// converte só se for png
				$imagem = imagecreatefrompng($localTemporarioArquivo);
				imagejpeg($imagem, $caminhoParaSalvar, 100);
				imagedestroy($imagem);
			} else {
				if (!copy($localTemporarioArquivo, $caminhoParaSalvar)) {
					$mensagem = "Houve um problema ao salvar o seu arquivo, tente novamente.";
					$mostrarForm = true;
				}
			}
		}
	} else {
		$mensagem = "O arquivo enviado deve ser uma imagem: JPG, JPEG ou PNG.";
		$mostrarForm = true;
	}

	// Gravando informações no banco
	if (!isset($mensagem)) { // se não possui mensagem é por que não deu nenhum problema até agora
		if ($alimentos->insert($nome, $descricao, $kcal, $carboidrato, $proteina, $gordura, $sodio, $hash_imagem)) {
			// Só chega aqui se inseriu com sucesso no banco
			$mostrarForm = false;
			$listarAlimentos = true;
			$listaAlimentos = $alimentos->getAll();
		} else {
			$mensagem = "Ocorreu um erro ao gravar os dados no banco de dados. Tente novamente em alguns instantes.";
			$mostrarForm = true;
		}
	}
} else {
	if (isset($_GET['novo']) && $_GET['novo'] == 1) {
		$mostrarForm = true;
	} else {
		$mostrarForm = false;
		if (isset($_GET['get'])) {
			$listarAlimentos = false;
			$alimento = $alimentos->getById(filter_input(INPUT_GET, 'get'));
		} else {
			$listarAlimentos = true;
			$listaAlimentos = $alimentos->getAll();
		}
	}
}

// Chamando view para apresentar os resultados
include(__DIR__ . '/../../views/alimentos.php');