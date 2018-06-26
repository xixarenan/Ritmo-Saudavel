<?php require_once('app/views/head.php'); ?>
	<div class="register-box">
		<div class="register-logo">
			<a href="#"><b>Rítmo</b>Saudável</a>
		</div>
		<div class="register-box-body">
			<p class="login-box-msg">Crie uma nova conta!</p>

			<form action="app/controladores/acesso/registrar.php" method="post">
				<div class="form-group has-feedback">
					<input name="nome" type="text" class="form-control" placeholder="Nome completo" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="email" type="email" class="form-control" placeholder="Email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="data_nasc" type="date" maxlength="10" class="form-control" placeholder="Data de Nascimento" required>
					<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="altura" type="number" min="0" max="4.99" step="0.01" class="form-control" placeholder="Altura atual" required>
					<span class="glyphicon glyphicon-arrow-up form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="peso" type="number" min="0" max="999.99" step="0.01" class="form-control" placeholder="Peso atual" required>
					<span class="glyphicon glyphicon-scale form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="meta_peso" type="number" min="0" max="999.99" step="0.01" class="form-control" placeholder="Sua meta de peso" required>
					<span class="glyphicon glyphicon-scale form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="usuario" type="text" class="form-control" placeholder="Usuário" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="senha" type="password" class="form-control" placeholder="Senha" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<button type="submit" class="btn btn-info btn-block btn-flat"><i class="fa fa-sign-in fa-fw"></i> Registrar</button>
					</div>
					<div class="col-xs-7">
						<a href="index.php" class="text-right btn btn-link">Já tenho uma conta!</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		document.querySelector('body').style.backgroundColor = '#eee';
	</script>
<?php require_once('app/views/foot.php'); ?>