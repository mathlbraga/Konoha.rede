//funcao NomeFuncao (String Nome.sc)
<?php
	namespace scriptPHP;

	class ScriptCmd
	{
		public funcion startScript(var script)
		{
			shell_exec($script);
		}
	}










	class ScriptList
	{
		public $comando
		
		public funcion Script()
		{

		}
	}	


	$sc = new ScriptList();
	$sc->comando = "adduser";
	var_dump($sc);
	$sc->Script();
	echo $sc->comando;
?>


<?php
	//CHAMA
	require '../scripts/script.php';
	$script = new \..\script\ScriptCmd();
?>
