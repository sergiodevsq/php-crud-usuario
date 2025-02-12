<?php
require_once("dbConnection.php");

if (isset($_POST['editar'])) {
	$id  	= mysqli_real_escape_string($mysqli, $_POST['id']);
	$nome 	= mysqli_real_escape_string($mysqli, $_POST['nome']);
	$idade 	= mysqli_real_escape_string($mysqli, $_POST['idade']);
	$email 	= mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	if (empty($nome) || empty($idade) || empty($email)) {
		if (empty($nome)) {
			echo "<font color='red'>Campo nome vazio.</font><br/>";
		}
		
		if (empty($idade)) {
			echo "<font color='red'>Campo idade vazio.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Campo e-mail vazio.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE users SET `nome` = '$nome', `age` = '$idade', `email` = '$email' WHERE `id` = $id");
		echo "<p><font color='green'>Usuário atualizado com sucesso!</p>";
		echo "<a href='index.php'>Voltar</a>";
	}
}
