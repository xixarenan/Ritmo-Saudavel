<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="assets/img/default_user.png" class="img-circle" alt="Imagem do Usuário">
			</div>
			<div class="pull-left info">
				<p><?=$_SESSION["userInfo"]["nome"]?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU PRINCIPAL</li>
			<li<?= (isset($_GET['view']) && $_GET['view'] == 'alimentos') ? ' class="active" style="pointer-events: none"' : '' ?>>
				<a href="index.php?view=alimentos">
					<i class="fa fa-cutlery text-red"></i>
					<span>Alimentos</span>
				</a>
			</li>
			<li<?= (isset($_GET['view']) && $_GET['view'] == 'exercicios') ? ' class="active" style="pointer-events: none"' : '' ?>>
				<a href="index.php?view=exercicios">
					<i class="fa fa-bolt text-aqua"></i>
					<span>Exercícios</span>
				</a>
			</li>
		</ul>
	</section>
</aside>