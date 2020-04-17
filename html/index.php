<html>
	<head>
		<title>Konoha</title>
		<link rel="stylesheet" type="text/css" href="./componentes/index.css">
		<link rel="shortcut icon" href="./img/icon.png">
	</head>
	
	<body style= "margin: 0 auto;">
		<header>
			<?php include("./componentes/navbar.php"); ?>
		</header>
		<nav id="nav1"></nav>
		<section>
			<p>
				Sistema:
			</p>
			<br>
			<?php
				$output = `uname -s -r`;
				echo "<pre>$output</pre>";
			?>
			<br>
			<br>
			<p>
				Usuário logado:
			</p>
			<br>
			<?php
				$output = `w`;
				echo "<pre>$output</pre>";
			?>
			<br>
			<br>
		</section>
		<footer>
			<?php include("./componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>

