<!DOCTYPE html>
<html>
<head>
	<title>Subtração</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post" action="subtracao.php">
			numero 1: <input type="text" name="numero1"><br>
			numero 2: <input type="text" name="numero2"><br>
			<input type="submit" name="submit" value="Subtrair"><br>
			<input type="reset" name="reset" value="limpar"><br>
			<input onclick="location.href = 'index.php' " type="button" value="Pagina Inicial">
		</form>
		<?php
			if (!empty($_POST['submit'])){
				$n1 = $_POST['numero1'];
				$n2 = $_POST['numero2'];
				$res = $n1-$n2;
				echo ('Resultado: '. $res);
			}
		?>
	</div>		
</body>
</html>