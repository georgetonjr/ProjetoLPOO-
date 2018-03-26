<!DOCTYPE html>
<html>
<head>
	<title>Números Primos</title>
</head>
<body>
	<div style="text-align: center;">
		<form method="post" action="numeros-primos.php">
			Quantidade de pessoas: <input type="text" name="qtp"><br>
			<input type="submit" name="submit" value="proximo"><br>
			<input type="reset" name="reset" value="limpar"><br>
			<input onclick="location.href='index.php'" type="button"  value="Pagina Inicial">
			
		</form>
		<?php 
			include('funcoes.php');
			if (!empty($_POST['submit'])) {				
				$resultado = numeros_primos($_POST['qtp']);
				foreach ($resultado as $key => $value) {
						echo 'resultado: '.$value, '<br>';
					}	
					
			}
		 ?>
	</div>
</body>
</html>