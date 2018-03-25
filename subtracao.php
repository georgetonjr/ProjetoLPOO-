<!DOCTYPE html>
<html>
<head>
	<title>Subtração</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post" action="subtracao.php">
			numero 1: <input type="text" name="Número3"><br>
			numero 2: <input type="text" name="Número4"><br>
			<input type="submit" name="submit" value="Subtrair"><br>
			<input type="reset" name="reset" value="limpar"><br>
			<input onclick="location.href = 'index.php' " type="button" value="Pagina Inicial">
		</form>
		<?php
			if (!empty($_POST['submit'])){
				$n3 = $_POST['numero3'];
				$n4 = $_POST['numero4'];
				$res = $n3-$n4;
				echo ('Resultado: '. $res);
			}
		?>
	</div>		
</body>
</html>