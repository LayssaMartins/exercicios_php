<?php
    $custoFabrica = $_POST['custo_fabrica'];

    if ($custoFabrica <= 39999.99) {
        $precoConsumidor = $custoFabrica * 1.05; // 5% do distribuidor
    } elseif ($custoFabrica <= 69999.99) {
        $precoConsumidor = $custoFabrica * (1 + 0.10 + 0.15); // 10% do distribuidor + 15% de impostos
    } else {
        $precoConsumidor = $custoFabrica * (1 + 0.15 + 0.20); // 15% do distribuidor + 20% de impostos
    }
    
    echo "Custo de Fábrica: R$ " . number_format($custoFabrica, 2, ',', '.') . "<br>";
    echo "Preço ao Consumidor: R$ " . number_format($precoConsumidor, 2, ',', '.');
?>