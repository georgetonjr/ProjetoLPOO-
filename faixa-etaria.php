<!DOCTYPE html>
<html>
<head>
	<title>Faixa etária</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post" action="faixa-etaria.php">
			Quantidade de pessoas: <input type="text" name="qtp"><br>
			<input type="submit" name="submit" value="proximo"><br>
			<input type="reset" name="reset" value="limpar"><br>
			<input onclick="location.href='index.php'" type="button"  value="Pagina Inicial">
			
		</form>
		<?php 
			include('funcoes.php');
			if (!empty($_POST['submit'])) {				
				$resultado = faixa_etaria($_POST['qtp']);
				print ('Resultado: '.$resultado);
				var_dump($resultado);
			}
		 ?>
	</div>
</body>
</html>