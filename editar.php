<?php
require_once("dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM usuariosdb WHERE id = $id");

$resultData = mysqli_fetch_assoc($result);

$nome  = $resultData['nome'];
$idade = $resultData['idade'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Editar</title>
</head>

<body>
    <h2>Editar</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="editar" method="post" action="editarUsuario.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="idade" value="<?php echo $idade; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="atualizar" value="atualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
