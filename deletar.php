<?php
require_once("dbConnection.php");

$id = $_GET['id'];

// Deleta registro do banco
$result = mysqli_query($mysqli, "DELETE FROM usuariosdb WHERE id = $id");

// Redireciona para a página principal
header("Location:index.php");
