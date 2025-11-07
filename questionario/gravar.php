<?php

include('conecta.php');

?>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$conceito = $_POST['conceito'];
$coment_um = $_POST['coment_um'];
$tecnologias = $_POST['tecnologias'];
$funcionalidades = $_POST['funcionalidades'];
$coment_dois = $_POST['coment_dois'];
$mascote = $_POST['mascote'];
$caracteristicas = $_POST['caracteristicas'];

$query = "INSERT INTO $tabela VALUES ('NULL',
'$nome',
'$email',
'$telefone',
'$cpf',
'$conceito',
'$coment_um',
'$tecnologias',
'$funcionalidades',  
'$coment_dois',
'$mascote',
'$caracteristicas')";

$mysqli = new mysqli($host, $login, $password, $bd);

if ($mysqli->connect_error) {
  die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

$resultado = $mysqli->query($query);

if ($resultado) {
  echo "Questionário Back-End foi respondido com sucesso.";
} else {
  echo "Erro na consulta: " . $mysqli->error;
}

$mysqli->close(); 
?>





