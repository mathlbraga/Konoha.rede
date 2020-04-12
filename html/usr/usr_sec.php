<html>
	<head>
		<title>Konoha</title>
		<style>
			nav
			{
				margin: 0 auto;
				background-image: url('../img/supera.jpeg');
				background-repeat: no-repeat;
				background-attachment: local;
				background-size: 100% 100%;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="usr.css">
	</head>

	<body>
		<header>
			<?php include("../componentes/nav.php"); ?>
		</header>
		<nav></nav>
		<section>
			<h1>
				<b>Recuperar senha:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome do usuário:</b>
					<br>
					<input type="text" name="usr_nome" placeholder="Ex.: bruno">
				</p>
				<p>
					<b>Informe a nova senha:</b>
					<br>
					<input type="password" name="usr_pass">
				</p>
				<p>
					<b>Solicitar alteração de senha:</b>
					<br>
					Sim
					<input type="radio" name="alt_pass" value="senha_sim"
						checked>
					&nbsp;&nbsp;&nbsp;
					Não:
					<input type="radio" name="alt_pass" value="senha_nao">
				</p>
				<p>
					<br>
					<br>
					<input type="button" onclick="" value="Confirmar">
				</p>
			</form>
		</section>
		<footer>
			<?php include("./componentes/footer.php"); ?>
		</footer>
	</body>
</html>