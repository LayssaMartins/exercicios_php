<?php
    // Atribui os valores do formulário
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);

    // Calcula a média
    $media = ($nota1 + $nota2) / 2;

    // Exibe o resultado
    echo "<h1>Resultado da Média</h1>";
    echo "<p>O aluno ficou com " . $media . " de média.</p>";
?>
