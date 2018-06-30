<section class="content-header">
	<h1>Exercícios</h1>
	<ol class="breadcrumb">
		<li><a href="index.php"><i class="fa fa-home"></i> Início</a></li>
		<li class="active">Exercícios</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<?php if ($listarExercicios) { ?>
			<?php if (count($listaExercicios) == 0) { ?>
				<h1 class="text-center"><i class="fa fa-frown-o fa-fw fa-3x"></i></h1>
				<h2 class="text-center"><small>Não encontramos nenhum exercício em nosso banco de dados.</small></h2>
			<?php } ?>
			<?php foreach ($listaExercicios as $exercicio) { ?>
				<a href="index.php?view=exercicios&get=<?= $exercicio['id'] ?>">
					<div class="col-xs-12">
						<div class="info-box">
							<img src="assets/img/exercicios/<?= $exercicio['hash_imagem'] ?>.jpg" class="info-box-icon" alt="Ilustração">
							<div class="info-box-content">
								<span class="info-box-text text-black"><b><?= $exercicio['nome'] ?></b></span>
								<span class="info-box-number text-gray"><small><?= substr($exercicio['descricao'], 0, 60) ?>...</small></span>
							</div>
						</div>
					</div>
				</a>
			<?php } ?>
		<?php } else { ?>
			<?php if (is_array($exercicio)) { ?>
				<div class="col-xs-12 text-center">
					<h1><?= $exercicio['nome'] ?></h1>
					<p><?= $exercicio['descricao'] ?></p>
					<img src="assets/img/exercicios/<?= $exercicio['hash_imagem'] ?>.jpg" class="img-responsive" alt="Ilustração">
				</div>
			<?php } else { ?>
				<h1 class="text-center"><i class="fa fa-frown-o fa-fw fa-3x"></i></h1>
				<h2 class="text-center"><small>Não encontramos nenhum exercício em nosso banco de dados.</small></h2>
			<?php } ?>
		<?php } ?>
	</div>
</section>