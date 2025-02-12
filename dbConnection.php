<?php
$databaseHost = 'localhost';
$databaseName = 'usuariosdb';
$databaseUsername = 'root';
$databasePassword = 'root';

//Abre uma nova conexão com o banco de dados
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
