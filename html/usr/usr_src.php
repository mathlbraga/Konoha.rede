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
				<b>Informações sobre conta do usuário:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome do usuário:</b>
					<br>
					<div id="divBusca">
						<input type="text" id="src_user" placeholder="Ex: bruno"/>
						<img src="../img/search.png" height="31px" width="31px" id="btnsrc" alt="Buscar"/>
					</div>
				</p>
				<p>
					<br>
					<input type="button" onclick="" value="Pesquisar">
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