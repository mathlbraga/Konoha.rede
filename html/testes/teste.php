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
		<nav id="nav1">
			<form action=./atualizacao.php method=get >
    			<input type=submit value='Atualizar'/>
			</form>
		</form>
		</nav>
		<section>
			<h1>
				<b>TESTE:</b>
			</h1>
			<h2>
				<b>[ÁREA DE TESTES PARA NOVAS FUNCIONALIDADES]</b>
			</h2>
			<br>
			<br>
			<br>

			[ls -al]
			<br>
			<?php
				$output = `ls -al`;
				echo "<pre>$output</pre>";
			?>
			[/ls -al]

			<br>
			<br>
			<br>

			[echo]
			<br>
			<?php
				$output2 = `echo a; echo b`;
				echo "<pre>$output2</pre>";
			?>
			[/echo]
			
			<br>
			<br>
			<br>

			[abre arq.txt]
			<br>
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

			<!--
			[inicia sh.sh]
			<br>
			<?php
				//$shsh = file_get_contents('../testes/sh.sh');
				//echo shell_exec($shsh);
			?>
			[/inicia sh.sh]

			<br>
			<br>
			<br>
			-->


		</section>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>