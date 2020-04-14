<?
	$new_dbname=$_POST['new_dbname'];
	$email_db=$_POST['email_db'];
	echo 'CRIANDO...';
	shell_exec('operations/new_db.sh');
	mail("$email_db", "xxx", "Seu login é:\Login: x\Senha: x\ Você deve alterar o login e senha padrão para maior segurança.");
	echo 'Criado com sucesso! Login e senha enviados para seu e-mail!';
	sleep(2);
?>
<html>
	<head>
		<META HTTP-EQUIV="REFRESH" CONTENT="60; URL=linked.ddns.net/?db=<? $new_dbname?>" target="_blank">
	</head>
</html>