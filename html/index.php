<html>
	<head>
		<title>Konoha</title>
		<link rel="stylesheet" type="text/css" href="./css/index.css">
		<link rel="shortcut icon" href="./img/icon.png">
	</head>
	
	<body style= "margin: 0 auto;">
		<header>
			<?php include("./componentes/navbar.php"); ?>
		</header>
		<nav id="nav1"></nav>
		<section>
			<p><b>Sistema:</b></p>

			<?php
				$output = `uname -s -r`;
				echo "<pre>$output</pre>";
			?>
			
			<br>
			<p><b>suário logado:</b>></p>
			
			<?php
				$output = `w -s`;
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

