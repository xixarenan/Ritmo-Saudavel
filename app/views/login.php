<?php require_once('head.php'); ?>
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Rítmo</b>Saudável</a>
		</div>
		<div class="login-box-body">
			<p class="login-box-msg">Entre para iniciar sua sessão:</p>

			<form action="app/controladores/acesso/entrar.php" method="post">
				<div class="form-group has-feedback">
					<input name="usuario" type="text" class="form-control" placeholder="Usuário" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="senha" type="password" class="form-control" placeholder="Senha" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-5">
						<button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-sign-in fa-fw"></i> Entrar</button>
					</div>
					<div class="col-xs-7">
						<a href="app/views/register.php" class="text-right btn btn-link">Cria uma nova conta!!</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php require_once('foot.php'); ?>