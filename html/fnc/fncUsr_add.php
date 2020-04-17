<?php
	$_POST['usr_nome'];
	$_POST['usr_snome'];
	$_POST['usr_tel'];
	$_POST['usr_email'];
	$_POST['usr_pass1'];
	$_POST['usr_pass2'];
	$_POST['usr_dir'];

	if ($_POST['usr_pass1'] == $_POST['usr_pass2'])
	{
		$func = "samba-tool user add ";
		$func .= $_POST['usr_nick'];
		$func .= " ";
		$func .= $_POST['usr_pass1'];
		$func .= " --home-directory ";
		$func .= $_POST['usr_dir'];
		$func .= " --given-name ";
		$func .= $_POST['usr_nome'];
		$func .= " --surname ";
		$func .= $_POST['usr_snome'];
		$func .= " --home-directory	";
		$func .= $_POST['usr_dir'];
		$func .= " --mail-address ";
		$func .= $_POST['usr_email'];
		$func .= " --telephone-number ";
		$func .= $_POST['usr_tel'];
		$func .= " --force-badname ";
		echo "<pre>$func</pre>";
	}
	else
	{
		echo "<pre>As senhas devem coincidirem!!</pre>";
	}

?>