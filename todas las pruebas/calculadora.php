<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en PHP</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Primer número:</label>
		<input type="number" name="num1"><br><br>
		<label>Segundo número:</label>
		<input type="number" name="num2"><br><br>
		<label>Operación:</label>
		<select name="operacion">
			<option value="sumar">Sumar</option>
			<option value="restar">Restar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">Dividir</option>
		</select><br><br>
		<input type="submit" name="submit" value="Calcular">
	</form>

	<?php 
		if (isset($_POST['submit'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operacion = $_POST['operacion'];

			switch ($operacion) {
					case 'sumar':
					$resultado = $num1 + $num2;
					break;
				case 'restar':
					$resultado = $num1 - $num2;
					break;
				case 'multiplicar':
					$resultado = $num1 * $num2;
					break;
				case 'dividir':
					if ($num2 != 0) {
						$resultado = $num1 / $num2;
					} else {
						$resultado = "No se puede dividir entre cero";
					}
					break;
				default:
					$resultado = "Operación no válida";
					break;
			}

			echo "<br><strong>El resultado es:</strong> ".$resultado;
		}
	?>
</body>