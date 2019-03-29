<!DOCTYPE html>
<html>
<?php
	if(!empty($_POST))
	{
		include("Revista.php");

		session_start();

		$_SESSION["Revista"][] = new Revista($_POST["nome"]);

		echo"revista cadastrada";	
	}
?>
	<head>

		<title></title>
	
	</head>
	<body>
		<a href="Listar_revista.php">Listar Revistas</a>
		|
		<a href="form_noticia.php">Cadastrar noticias</a>

		<form method = "post" action = "form_revista.php">
			
			<input type="text" name="nome" placeholder="nome revista..." />

			<button>Cadastrar nova Revista</button>

		</form>

	</body>
</html>