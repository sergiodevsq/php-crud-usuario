<html>
<head>
	<title>Adicionando Usuário</title>
</head>

<body>
<?php
require_once("dbConnection.php");

if (isset($_POST['adicionar'])) {
	$name 	= mysqli_real_escape_string($mysqli, $_POST['nome']);
	$age 	= mysqli_real_escape_string($mysqli, $_POST['idade']);
	$email 	= mysqli_real_escape_string($mysqli, $_POST['email']);
		
	if (empty($nome) || empty($idade) || empty($email)) {
		if (empty($nome)) {
			echo "<font color='red'>Campo nome está vazio.</font><br/>";
		}
		
		if (empty($idade)) {
			echo "<font color='red'>Campo idade está vazio.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Campo e-mail está vazio.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		$result = mysqli_query($mysqli, "INSERT INTO users (`nome`, `idade`, `email`) VALUES ('$nome', '$idade', '$email')");
		echo "<p><font color='green'>Usuário adicionado com sucesso!</p>";
		echo "<a href='index.php'>Voltar</a>";
	}
}
?>
</body>
</html>
