<?php
include("conecta.php");

// Dados do participante
$nome = $mysqli->real_escape_string($_POST['nome']);
$telefone = $mysqli->real_escape_string($_POST['telefone']);
$email = $mysqli->real_escape_string($_POST['email']);

// Perguntas do questionário
$q1 = $mysqli->real_escape_string($_POST['q1']);
$q2 = $mysqli->real_escape_string($_POST['q2']);
$q3 = $mysqli->real_escape_string($_POST['q3']);
$q4 = $mysqli->real_escape_string($_POST['q4']);
$q5 = $mysqli->real_escape_string($_POST['q5']);
$q6 = $mysqli->real_escape_string($_POST['q6']);
$q7 = $mysqli->real_escape_string($_POST['q7']);
$q8 = $mysqli->real_escape_string($_POST['q8']);
$q9 = $mysqli->real_escape_string($_POST['q9']);
$q10 = $mysqli->real_escape_string($_POST['q10']);
$q11 = $mysqli->real_escape_string($_POST['q11']);
$q12 = $mysqli->real_escape_string($_POST['q12']);

// Inserindo no banco
$query = "
INSERT INTO $tabela
(nome, telefone, email, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12)
VALUES
('$nome', '$telefone', '$email', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12')
";

if ($mysqli->query($query)) {
    echo "<h2>✅ Questionário gravado com sucesso!</h2>";
    echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
} else {
    echo "❌ Erro ao gravar: " . $mysqli->error;
}

$mysqli->close();
?>