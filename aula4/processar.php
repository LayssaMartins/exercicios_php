<?php

// Função para calcular a média
function calcularMedia($n1, $n2, $n3)
{
    // A conversão para float garante que a soma seja numérica
    return ($n1 + $n2 + $n3) / 3;
}

// Pega os dados do formulário (sem verificações ainda)
$nome = $_POST['nome'];
$disciplina = $_POST['disciplina'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

// Calcula a média
$mediaFinal = calcularMedia($nota1, $nota2, $nota3);

// Imprime o resultado
echo "Resultado:";
echo "<p>Nome:" . $nome . "</p>";
echo "<p>Disciplina:" . $disciplina . "</p>";
echo "<p>Média:" . number_format($mediaFinal, 2, ',', '.') . "</p>";
?>

<?php
// Verifica se o aluno foi aprovado ou reprovado
if ($mediaFinal >= 7) {
    echo "<p><strong>Status:</strong> Aprovado</p>";
} else {
    echo "<p><strong>Status:</strong> Reprovado<p>";
}   
?>