<html>
	<head>
		<title>Konoha</title>
		<link rel="stylesheet" type="text/css" href="../css/usr.css">
		<link rel="shortcut icon" href="../img/icon.png">
	</head>

	<body>
		<header>
			<?php include("../componentes/navbar.php"); ?>
		</header>
		<nav id="nav1"></nav>
		<section>
			<h1>
				<b>Remover usuário:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome do usuário:</b>
					<br>
					<input type="text" name="usr_nome" placeholder="Ex.: bruno">
				</p>
				<p>
					<b>Remover todos os arquivos:</b>
					<br>
					Sim
					<input type="radio" name="alt_pass" value="remArq_sim"
						checked>
					&nbsp;&nbsp;&nbsp;
					Não:
					<input type="radio" name="alt_pass" value="remArq_nao">
				</p>
				<br>
				<br>
				<p>
					<input type="button" onclick="" value="Confirmar">
				</p>
			</form>
		</section>
		<br>
		<br>
		<br>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>