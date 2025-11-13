<?php
$host = "localhost";
$login = "root";
$password = "";
$bd = "questionario";

$tabela = "questionario_quimica";

$mysqli = new mysqli($host, $login, $password, $bd);

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}
?>