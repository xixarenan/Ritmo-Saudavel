<section class="content-header">
	<h1>Alimentos
		<?php
			if ($mostrarForm) {
				echo ' <small>Cadastrar</small><span class="pull-right"><a href="index.php?view=alimentos"><i class="fa fa-arrow-left text-black"></i></a></span>';
			} else {
				echo '<span class="pull-right"><a href="index.php?view=alimentos&novo=1"><i class="fa fa-plus text-black"></i></a></span>';
			}
		?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="index.php"><i class="fa fa-home"></i> Início</a></li>
		<?php if ($mostrarForm) { ?>
			<li><a href="index.php?view=alimentos">Alimentos</a></li>
			<li class="active">Cadastrar</li>
		<?php } else { ?>
			<li class="active"><a href="index.php?view=alimentos">Alimentos</a></li>
		<?php } ?>
	</ol>
</section>

<section class="content">
	<div class="row">
		<?php if ($mostrarForm) { ?>
			<div class="col-xs-12">
				<form action="index.php?view=alimentos&novo=1" method="post" enctype="multipart/form-data">
					<input type="hidden" name="flow" value="1">
					<?php if (isset($mensagem)) { ?>
						<div class="alert alert-danger alert-dismissible fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Oops!</strong> <?= $mensagem ?>
						</div>
					<?php } ?>
					<div class="form-group">
						<label for="nome" class="control-label">Nome</label>
						<input id="nome" type="text" name="nome" maxlength="50" class="form-control"<?= (isset($_POST['nome']) ? ' value="' . $_POST['nome'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="descricao" class="control-label">Descricao</label>
						<textarea id="descricao" name="descricao" class="form-control" minlength="15" required><?= (isset($_POST['descricao']) ? $_POST['descricao'] : '') ?></textarea>
					</div>
					<div class="form-group">
						<label for="kcal" class="control-label">Kcal</label>
						<input id="kcal" type="number" step="0.05" name="kcal" min="0" class="form-control"<?= (isset($_POST['kcal']) ? ' value="' . $_POST['kcal'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="carboidrato" class="control-label">Carboidratos (g)</label>
						<input id="carboidrato" type="number" step="0.05" name="carboidrato" min="0" class="form-control"<?= (isset($_POST['carboidrato']) ? ' value="' . $_POST['carboidrato'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="proteina" class="control-label">Proteína (g)</label>
						<input id="proteina" type="number" step="0.05" name="proteina" min="0" class="form-control"<?= (isset($_POST['proteina']) ? ' value="' . $_POST['proteina'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="gordura" class="control-label">Gordura (g)</label>
						<input id="gordura" type="number" step="0.05" name="gordura" min="0" class="form-control"<?= (isset($_POST['gordura']) ? ' value="' . $_POST['gordura'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="sodio" class="control-label">Sódio (mg)</label>
						<input id="sodio" type="number" step="0.05" name="sodio" min="0" class="form-control"<?= (isset($_POST['sodio']) ? ' value="' . $_POST['sodio'] . '"' : '') ?> required>
					</div>
					<div class="form-group">
						<label for="imagem" class="control-label">Imagem</label>
						<input id="imagem" type="file" name="imagem" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-success"><i class="fa fa-plus fa-fw"></i> Cadastrar Alimento</button>
					</div>
				</form>
			</div>
		<?php } else { ?>
			<?php if ($listarAlimentos) { ?>
				<?php if (count($listaAlimentos) == 0) { ?>
					<h1 class="text-center"><i class="fa fa-frown-o fa-fw fa-3x"></i></h1>
					<h2 class="text-center"><small>Não encontramos nenhum alimento em nosso banco de dados.</small></h2>
					<a href="index.php?view=alimentos&novo=1" class="btn btn-link btn-block text-center"><i class="fa fa-plus fa-fw"></i> Cadastrar novo Alimento</a>
				<?php } ?>
				<?php foreach ($listaAlimentos as $alimento) { ?>
					<a href="index.php?view=alimentos&get=<?= $alimento['id'] ?>">
						<div class="col-xs-12">
							<div class="info-box">
								<img src="assets/img/alimentos/<?= $alimento['hash_imagem'] ?>.jpg" class="info-box-icon" alt="Ilustração">
								<div class="info-box-content">
									<span class="info-box-text text-black"><b><?= $alimento['nome'] ?></b></span>
									<span class="info-box-number text-gray"><small><?= substr($alimento['descricao'], 0, 60) ?>...</small></span>
								</div>
							</div>
						</div>
					</a>
				<?php } ?>
			<?php } else { ?>
				<?php if (is_array($alimento)) { ?>
					<div class="col-xs-12 text-center">
						<h1><?= $alimento['nome'] ?></h1>
						<p><?= $alimento['descricao'] ?></p>
						<p><b>Kcal:</b> <?= $alimento['kcal'] ?>kcal</p>
						<p><b>Carboidratos:</b> <?= $alimento['carboidrato'] ?>g</p>
						<p><b>Proteínas:</b> <?= $alimento['proteina'] ?>g</p>
						<p><b>Gordura:</b> <?= $alimento['gordura'] ?>g</p>
						<p><b>Sódio:</b> <?= $alimento['sodio'] ?>mg</p>
						<img src="assets/img/alimentos/<?= $alimento['hash_imagem'] ?>.jpg" class="img-responsive" alt="Ilustração" style="display: table; margin: auto;">
						
					</div>
				<?php } else { ?>
					<h1 class="text-center"><i class="fa fa-frown-o fa-fw fa-3x"></i></h1>
					<h2 class="text-center"><small>Não encontramos nenhum alimento em nosso banco de dados.</small></h2>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</div>
</section>