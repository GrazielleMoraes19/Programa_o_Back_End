<?php

$valor_produto = 150;
$quantidade = 3;
$imposto_percentual = 0.10; 


$subtotal = $valor_produto * $quantidade;        
$valor_imposto = $subtotal * $imposto_percentual; 
$total_final = $subtotal + $valor_imposto;        



echo "<h2>Calculadora de Pedido</h2>";
echo "Subtotal (R$): " . $subtotal . "<br>";      
echo "Valor do Imposto (R$): " . $valor_imposto . "<br>";
echo "Total a Pagar (R$): " . $total_final . "<br>";    

?>
