<?php
	// Verifica sessao
	require_once('./app/controladores/procedimentos/verificar_sessao.php');

	/** Retorna uma mensagem de boas vindas */
	function mensagemBoasVindas() {
		return '<section class="content">'
				. '<div class="row" style="margin-top:13%">'
					. '<div class="col-xs-12 text-center">'
						. '<h1>Bem vindo(a), '. ucfirst(explode(' ', $_SESSION["userInfo"]["nome"])[0]) .'!</h1>'
						. '<h2><small>Este é o aplicativo Rítmo Saudável, feito para ajudar e auxiliá-lo(a) com sua saúde e bem-estar.<br>Use os menus da barra lateral para acessar as demais partes do aplicativo.</small></h2>'
					. '</div>'
				. '</div>'
			. '</section>';
	}

	/** Retorna uma mensagem dizendo que a página requisitada não foi encontrada */
	function paginaNaoEncontrada() {
		return '<section class="content">'
				. '<div class="row" style="margin-top:13%">'
					. '<div class="col-xs-12 text-center">'
						. '<h1>Desculpe, '. ucfirst(explode(' ', $_SESSION["userInfo"]["nome"])[0]) .'!</h1>'
						. '<h2><small>Não conseguimos encontrar esta página do aplicativo que você está tentando acessar.</small></h2>'
					. '</div>'
				. '</div>'
			. '</section>';
	}
?>

<?php require_once('./app/views/head.php'); ?>
<div class="wrapper">
	<?php require_once('./app/views/navbar.php'); ?>
	<?php require_once('./app/views/sidebar.php'); ?>
	<div class="content-wrapper">
		<section class="content-header">
			<?php
				if (isset($_GET['view'])) {
					switch ($_GET['view']) {
						case 'alimentos':
							include('app/controladores/paginas/alimentos.php');
							break;
						case 'exercicios':
							include('app/controladores/paginas/exercicios.php');
							break;
						default:
							echo paginaNaoEncontrada();
							break;
					}
				} else {
					echo mensagemBoasVindas();
				}
			?>
		</section>
		<section class="content">
				
		</section>
	</div>
</div>
<?php require_once('./app/views/foot.php'); ?>