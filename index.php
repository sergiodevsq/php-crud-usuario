<?php
// Inclui conexão BD
require_once("dbConnection.php");

// Buscar dados em ordem decrescente (última entrada primeiro)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Página Principal</title>
</head>

<body>
	<h2>Página Principal</h2>
	<p>
		<a href="adicionar.php">Adicionar</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nome</strong></td>
			<td><strong>Idade</strong></td>
			<td><strong>E-mail</strong></td>
			<td><strong>Ação</strong></td>
		</tr>
		<?php
		//Busca a próxima linha de um conjunto de resultados como um array associativo
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['nome']."</td>";
			echo "<td>".$res['idade']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"editar.php?id=$res[id]\">Editar</a> | 
			<a href=\"deletar.php?id=$res[id]\" onClick=\"return confirm('Você está certo que deseja deletar?')\">Deletar</a></td>";
		}
		?>
	</table>
</body>
</html>
