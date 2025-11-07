<?php

$numero_base = 95;

?>

<?php

$antecessor = $numero_base - 1; // Ou: --$numero_base;

$sucessor = $numero_base + 1;  // Ou: ++$numero_base;

// Desafio: Some o antecessor e o sucessor e divida por 2

$media_extrema = ($antecessor + $sucessor) / 2;

?>

<?php

echo "<h2>Atividade 9: Antecessor e Sucessor</h2>";

echo "Número Base: {$numero_base} <br>";

echo "Antecessor: {$antecessor} <br>";

echo "Sucessor: {$sucessor} <br>";

echo "Média Extrema: {$media_extrema} (O valor deve ser o número base!)";

?>