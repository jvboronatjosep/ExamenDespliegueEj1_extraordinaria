<?php

require_once 'src/Areas.php';

use App\Areas;

$resultado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado = isset($_POST['lado']) ? floatval($_POST['lado']) : 0;
    $base = isset($_POST['base']) ? floatval($_POST['base']) : 0;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

    $resultado = Areas::calcularAreas($lado, $base, $altura);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Áreas</title>
</head>
<body>
    <h1>Calcular Áreas</h1>
    <form method="post">
        <label for="lado">Lado del cuadrado:</label><br>
        <input type="number" step="any" name="lado" id="lado" required><br><br>

        <label for="base">Base del triángulo:</label><br>
        <input type="number" step="any" name="base" id="base" required><br><br>

        <label for="altura">Altura del triángulo:</label><br>
        <input type="number" step="any" name="altura" id="altura" required><br><br>

        <input type="submit" value="Aceptar">
    </form>

    <?php if ($resultado): ?>
        <h2>Resultados:</h2>
        <p>Área del cuadrado: <?= $resultado['cuadrado'] ?></p>
        <p>Área del triángulo: <?= $resultado['triangulo'] ?></p>
    <?php endif; ?>
</body>
</html>
