<html>
<head>
	<title>Adicionar Usuário</title>
</head>

<body>
	<h2>Adicionar Usuário</h2>
	<p>
		<a href="index.php">Voltar</a>
	</p>

	<form action="adicionarUsuario.php" method="post" name="adicionar">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="idade"></td>
			</tr>
			<tr> 
				<td>E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="adicionandoUsuario" value="Adicionar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

