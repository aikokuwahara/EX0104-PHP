<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Palavra</Title>
	</head>
	<body>
	<fieldset>
		<legend> Escreva uma palavra e a quantidade de vezes que você quer que repita</legend>
		<form method="post" action = "calcular.php">
		Clique no botão para aparecer a repetição:
        <br/>
        Palavra:
        <br/>
        <input type="text" id="$i" name="$i" required>
        <br/>
        Número de repetições:
        <br/>
        <input type="text" id="$r" name="$r" required>

		<br />
		<br />
        <input type = "submit" name = "$qtd" value = "Enviar" />
		
		</form>
	</fieldset>
	</body>
	</html>