<?php

$distancia_km = 350.7; // Distância percorrida em km

$litros_consumidos = 32.5; // Combustível consumido em litros

?>

<?php

// ... (código de variáveis)

$consumo_medio = $distancia_km / $litros_consumidos;

echo "<h2>Desafio: Consumo de Combustível</h2>";

echo "Distância Percorrida: {$distancia_km} km <br>";

echo "Litros Consumidos: {$litros_consumidos} L <br>";

echo "O Consumo Médio do veículo foi de: " . round($consumo_medio, 2) . " Km/L.";

// O round(valor, 2) é apenas para deixar o resultado mais bonito, arredondando para duas casas.

?>