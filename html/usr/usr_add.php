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
			var func="";
			<h1>
				<b>Adicionar usuário:</b>
			</h1>
			<form action="../fnc/fncUsr_add.php" method="post">
				<fieldset>
					<p>
						<b>Informe o nome de usuário:</b>
						<br>
						<input type="text" name="usr_nick" id="usr_nick" placeholder="Ex.: bruno_brs">
					</p>
					<p>
						<b>Informe o nome do usuário:</b>
						<br>
						<input type="text" name="usr_nome" id="usr_nome" placeholder="Ex.: Bruno">
					</p>
					<p>
						<b>Informe o sobrenome do usuário:</b>
						<br>
						<input type="text" name="usr_snome" id="usr_snome" placeholder="Ex.: Silva">
					</p>
					<p>
						<b>Informe o telefone do usuário:</b>
						<br>
						<input type="tel" name="usr_tel" id="usr_tel" pattern="[0-9]{11}" placeholder="Ex.: 12345678901">
					</p>
					<p>
						<b>Email:</b>
						<br>
						<input type="email" name="usr_email" id="usr_email" placeholder="Ex.: bruno@konoha.rede">
					</p>
					<p>
						<b>Informe senha:</b>
						<br>
						<input type="password" name="usr_pass1" id="usr_pass1">
						<br>
						<b>Reinforme a senha:</br>
						<input type="password" name="usr_pass2" id="usr_pass2">
					</p>
					<p>
						<b>Solicitar alteração de senha:</b>
						<br>
						Sim
						<input type="radio" name="alt_pass" id="alt_pass" value="senha_sim" checked>
						&nbsp;&nbsp;&nbsp;
						Não:
						<input type="radio" name="alt_pass" id="alt_pass" value="senha_nao">
					</p>
					<p>
						<b>Diretório:</b>
						<br>
						&nbsp;/var/
						<input type="text" name="usr_dir" id="usr_dir" placeholder="home/bruno/">
					</p>	
					<p>
						<br>
						<br>
						<input type="button" onclick="AddUserFunction();" value="Criar">
					</p>
				</fieldset>
			</form>

			<script type="text/javascript">
				if(document.getElementById('usr_pass1').value == document.getElementById('usr_pass2').value)
				{
					function AddUserFunction()
					{
						func = "sudo samba-tool user add ";
						func = func.concat(document.getElementById('usr_nick').value);
						func = func.concat(" ";
						func = func.concat(document.getElementById('usr_pass1').value);
						func = func.concat(" --home-directory ";
						func = func.concat(document.getElementById('usr_dir').value);
						func = func.concat(" --given-name ";
						func = func.concat(document.getElementById('usr_nome').value);
						func = func.concat(" --surname ";
						func = func.concat(document.getElementById('usr_snome').value);
						func = func.concat(" --home-directory	";
						func = func.concat(document.getElementById('usr_dir').value);
						func = func.concat(" --mail-address ";
						func = func.concat(document.getElementById('usr_email').value);
						func = func.concat(" --telephone-number ";
						func = func.concat(document.getElementById('usr_tel').value);
						func = func.concat(" --force-badname ");
						
						<?php echo "<pre>$func</pre>"; ?>
					}
				}
				else
				{
					alert("Verifique se as senhas correspondem!");
				}
			</script>
		</section>
		<br>
		<br>
		<br>
		<footer>
			<?php include("../componentes/footerbar.php"); ?>
		</footer>
	</body>
</html>