<html>
	<head>
		<title>Konoha</title>
		<link rel="stylesheet" type="text/css" href="../css/grp.css">
		<link rel="shortcut icon" href="../img/icon.png">
	</head>

	<body>
		<header>
			<?php include("../componentes/navbar.php"); ?>
		</header>
		<nav id="nav1"></nav>
		<section>
			<h1>
				<b>Informações sobre grupos:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome do grupo:</b>
					<br>
					<div id="divBusca">
						<input type="text" id="src_user" placeholder="Ex: escritorio"/>
						<img src="../img/search.png" id="btnsrc" alt="Buscar"/>
					</div>
				</p>
				<p>
					<br>
					<input type="button" onclick="" value="Pesquisar">
				</p>
			</form>
		</section>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>