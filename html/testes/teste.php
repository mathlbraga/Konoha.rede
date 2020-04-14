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
				<b>TESTE:</b>
			</h1>
			<br>
			<p><b>TESTE:</b></p>
			<br>
			<br>
			<br>

			[ls -al]
			<?php
				$output = `ls -al`;
				echo "<pre>$output</pre>";
			?>
			[/ls -al]
			
			<br>
			<br>
			<br>
			
			[inicia sh.sh]
			<?php
				$shsh = file_get_contents('../testes/sh.sh');
				echo shell_exec($shsh);
			?>
			[/inicia sh.sh]

			[abre arq.txt]
			<?php
				// Abre o Arquvio no Modo r (para leitura)
				$arquivo = fopen ('arq.txt', 'r');
				// Lê o conteúdo do arquivo
				while(!feof($arquivo))
				{
					//Mostra uma linha do arquivo
					$linha = fgets($arquivo, 1024);
					echo $linha.'<br />';
				}
				// Fecha arquivo aberto
				fclose($arquivo);
			?>
			[/abre arq.txt]
			
			<br>
			<br>
			<br>
			
		</section>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>