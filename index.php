<?php
	// Verifica sessao
	require_once('./app/controladores/procedimentos/verificar_sessao.php');
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
							echo '<h1>Alimentos</h1>';
							break;
						case 'exercicios':
							echo '<h1>Exercícios</h1>';
							break;
						default:
							echo '<h1>Ainda não implementado</h1>';
							break;
					}
				} else {
					echo '<h1>Início</h1>';
				}
			?>
		</section>
		<section class="content">
				
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Versão</b> 1.0.0
		</div>
		<strong>Copyright &copy; 2018</strong> - Todos os direitos reservados.
	</footer>
</div>
<?php require_once('./app/views/foot.php'); ?>