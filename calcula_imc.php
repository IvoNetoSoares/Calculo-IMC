<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    // Cálculo do IMC
    $imc = $peso / ($altura * $altura);

    // Formatação do IMC com duas casas decimais
    $imc_formatado = number_format($imc, 2, ',', '.');

    // Determinação da categoria do IMC
    if ($imc < 18.5) {
        $categoria = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidade";
    }

    echo "<h2>Resultado do IMC</h2>";
    echo "Seu IMC é: $imc_formatado<br>";
    echo "Categoria: $categoria<br>";
}
?>
