<html>
	<head>
		<title>Konoha</title>
		<link rel="stylesheet" type="text/css" href="usr.css">
		<link rel="shortcut icon" href="../img/icon.png">
	</head>

	<body>
		<header>
			<?php include("../componentes/navbar.php"); ?>
		</header>
		<nav id="nav1"></nav>
		<section>
			<h1>
				<b>Adicionar usuário:</b>
			</h1>
			<form>
				<p>
					<b>Informe o nome de usuário:</b>
					<br>
					<input type="text" name="usr_nick" placeholder="Ex.: bruno_brs">
				</p>
				<p>
					<b>Informe o nome do usuário:</b>
					<br>
					<input type="text" name="usr_nome" placeholder="Ex.: Bruno">
				</p>
				<p>
					<b>Informe o sobre nome do usuário:</b>
					<br>
					<input type="text" name="usr_snome" placeholder="Ex.: Silva">
				</p>
				<p>
					<b>Informe o sobrenome do usuário:</b>
					<br>
					<input type="text" name="usr_nome" placeholder="Ex.: Silva">
				</p>
				<p>
					<form>
						<b>Email:</b>
						<br>
						<input type="email" name="email" placeholder="Ex.: bruno@konoha">
					</form>
				</p>
				<p>
					<b>Informe senha:</b>
					<br>
					<input type="password" name="usr_pass1">
					<br>
					<b>Reinforme a senha:</br>
					<input type="password" name="usr_pass2">
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
					<b>Diretório:</b>
					<br>
					&nbsp;/var/
					<input type="text" name="usr_nome" placeholder="home/bruno/">
				</p>
				
				
				<p>
					<br>
					<br>
					<input type="button" onclick="" value="Criar">
					&nbsp;&nbsp;&nbsp;
					<input type="button" onclick="" value="Cancelar">
				</p>
			</form>
		</section>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>