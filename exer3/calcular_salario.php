<?php
    // Recebe os dados 
    $salarioFixo = $_POST['salario_fixo'];
    $vendas = $_POST['vendas'];

    // Define a comissão com o cálculo de 4%
    $comissao = $vendas * 0.04;

    // Calcula o salário final
    $salarioFinal = $salarioFixo + $comissao;

    // Exibe os resultados
    echo "<h2>Resultado do Cálculo</h2>";
    echo "Salário Fixo: R$ " . number_format($salarioFixo, 2, ',', '.') . "<br>";
    echo "Comissão (4%): R$ " . number_format($comissao, 2, ',', '.') . "<br>";
    echo "Salário Final: R$ " . number_format($salarioFinal, 2, ',', '.') . "<br>";
?>