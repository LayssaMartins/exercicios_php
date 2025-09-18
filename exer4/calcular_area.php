<?php
    // Recebe os dados 
    $baseMaior = $_POST['base_maior'];
    $baseMenor = $_POST['base_menor'];
    $altura = $_POST['altura'];

    // Calculando o trapézio
    $area = (($baseMaior + $baseMenor) * $altura) / 2;

    // Resultado
    echo "<h2>Resultado do Cálculo</h2>";
    echo "Base Maior: " . number_format($baseMaior, 2, ',', '.') . "<br>";
    echo "Base Menor: " . number_format($baseMenor, 2, ',', '.') . "<br>";
    echo "Altura: " . number_format($altura, 2, ',', '.') . "<br>";
    echo "<h3>A área do trapézio é: " . number_format($area, 2, ',', '.') . "</h3>";
?>