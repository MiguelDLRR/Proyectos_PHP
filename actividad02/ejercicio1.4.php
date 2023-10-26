<!DOCTYPE html>
<html>
<head>
    <title>Control de Luces</title>
</head>
<body>
<h1>Control de Luces</h1>

<?php
// Inicializa un array de 8 luces, todas apagadas (false)
$luces = array_fill(0, 8, false);

// Verifica si se envió una secuencia de interruptores
if (isset($_POST['secuencia'])) {
    // Divide la secuencia de interruptores en un array
    $secuencia = explode(',', $_POST['secuencia']);

    // Recorre la secuencia de interruptores y cambia el estado de las luces
    foreach ($secuencia as $interruptor) {
        $indice = intval($interruptor) - 1;
        if ($indice >= 0 && $indice < 8) {
            // Cambia el estado de la luz correspondiente
            $luces[$indice] = !$luces[$indice];
        }
    }
}

// Muestra el estado de las luces
echo "Estado de las luces: ";
foreach ($luces as $estado) {
    echo ($estado ? 'true' : 'false') . ', ';
}
?>

<form method="post">
    <label for="secuencia">Introduce la secuencia de interruptores (ejemplo: 1,2,3,4,4,4,4,3,5):</label>
    <input type="text" name="secuencia" id="secuencia" required>
    <input type="submit" value="Aplicar">
</form>

</body>
</html>