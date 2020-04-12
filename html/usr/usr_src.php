<html>
	<head>
		<title>Konoha</title>
		<style>
		</style>
		<link rel="stylesheet" type="text/css" href="usr.css">
	</head>

	<body>
		<header>
			<?php include("./componentes/nav.php"); ?>
		</header>
		<nav></nav>
		<section>
			<h1>
				<b>Informações sobre conta do usuário:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome do usuário:</b>
					<br>
					<input type="text" name="usr_nome" placeholder="Ex.: bruno">
				</p>
				<p>
					<br>
					<input type="button" onclick="" value="Pesquisar">
				</p>
			</form>
		</section>
		<footer>
			<?php include("./componentes/footer.php"); ?>
		</footer>
	</body>
</html>