<!DOCTYPE html>
<html>
<head>
	<title>Divisão</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post" action="divisao.php">
			numero 1: <input type="text" name="numero1"><br>
			numero 2: <input type="text" name="numero2"><br>
			<input type="submit" name="submit" value="dividir"><br>
			<input type="reset" name="reset" value="limpar"><br>
			<input onclick="location.href='index.php'" type="button"  value="Pagina Inicial">
		</form>
		<?php
		include ('funcoes.php');
			if (!empty($_POST['submit'])) {
				$resultado = divisao($_POST['numero1'],$_POST['numero2']);
				print ('Resultado: '.$resultado);
			}
		 ?>
	</div>
</body>
</html>