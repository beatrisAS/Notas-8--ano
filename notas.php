<?php
// Array bidimensional com as notas dos alunos
$notas = [
    ["Ana", [10.0, 9.5, 9.0, 8.5, 10.0], [9.5, 10.0, 9.0, 8.5, 9.5]], 
    ["Carlos", [0.0, 4.5, 1.5, 4.0, 1.0], [4.0, 2.0, 3.5, 4.5, 1.0]],
    ["João", [8.5, 7.0, 9.0, 6.5, 8.0], [7.5, 8.0, 8.5, 9.0, 7.0]], 
    ["Maria", [9.0, 8.5, 7.5, 8.0, 9.5], [8.0, 9.0, 8.5, 7.5, 8.5]], 
    ["Marina", [2.0, 5.0, 3.5, 4.5, 5.0], [3.0, 4.5, 5.5, 4.0, 5.0]], 
    ["Pedro", [1.0, 5.0, 3.5, 4.5, 5.0], [0.0, 4.5, 5.5, 4.0, 5.0]]
];

// Função para calcular a média de um array de notas
function calcularMedia($notas) {
    return array_sum($notas) / count($notas);
}

// Função para determinar a situação do aluno
function determinarSituacao($media) {
    return $media >= 6.0 ? "Aprovado" : "Reprovado";
}

// Loop para gerar as linhas da tabela
foreach ($notas as $aluno) {
    $nome = $aluno[0];
    $notasPrimeiroSemestre = $aluno[1];
    $notasSegundoSemestre = $aluno[2];

    $mediaPrimeiroSemestre = calcularMedia($notasPrimeiroSemestre);
    $mediaSegundoSemestre = calcularMedia($notasSegundoSemestre);
    $mediaFinal = ($mediaPrimeiroSemestre + $mediaSegundoSemestre) / 2;
    $situacao = determinarSituacao($mediaFinal);

    echo "<tr>";
    echo "<td>{$nome}</td>";
    echo "<td>" . number_format($mediaPrimeiroSemestre, 2) . "</td>";
    echo "<td>" . number_format($mediaSegundoSemestre, 2) . "</td>";
    echo "<td>" . number_format($mediaFinal, 2) . "</td>";
    echo "<td class='" . ($situacao === "Aprovado" ? "text-success" : "text-danger") . "'>{$situacao}</td>";
    echo "</tr>";
}
?>