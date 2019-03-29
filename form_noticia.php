<!DOCTYPE html>
<html>
	<head>

		<title></title>
	
	</head>
	<body>
	<?php

		include("Revista.php");

			session_start();


		if(!empty($_POST))
		{
			$pos = $_POST["cod_revista"];
			$t = $_POST["titulo"];
			$r = $_POST["resumo"];
			$m = $_POST["materia"];
			$f = $_POST["foto"];
			$_SESSION["Revista"][$pos]->adicionar_noticia($t,$r,$m,$f);
			echo "Notícia cadastrada com sucesso na revista: ";
			echo $_SESSION["Revista"][$pos]->get_nome();
			echo "<br />";
		}
	?>	
	<?php
			

	?>
		<form method = "post" action = "form_noticia.php">
			Escolha a revista:<br /><br />
			<select name="cod_revista">
				<option>::selecione uma revista::</option>
				<?php
					foreach($_SESSION["Revista"] as $i=>$r) {
						echo"<option value= '$i'>".$r->get_nome()."</option>";
					}
				?>
			</select>
			<br /><br />
			<input type="text" name="titulo" placeholder="titulo da noticia..." />
			<br /><br /><input type="text" name="resumo" placeholder="resumo da noticia..." />
			<br /><br /><input type="textarea" name="materia" placeholder="materia da noticia..." />
			<br /><br /><input type="text" name="foto" placeholder="*FOTO*" />
			<br /><br />		
			<button>Cadastrar nova noticia</button>

		</form>

	</body>
</html>