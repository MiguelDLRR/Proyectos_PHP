<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>

<legend>Consultar menú</legend>
<form method= "POST">
    Día:<select name="dia" id="dia">
                <option></option>
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <option value="sabado">Sábado</option>
                <option value="domingo">Domingo</option>
            </select><br>

    <button type="submit">Consultar</button>
</form>
  <?php
//Escribir un programa que represente el menú semanal de un restaurante utilizando un array asociativo. 
//Las claves serán los días de la semana y los valores serán los platos.
//El programa constará de un formulario en el que el usuario introducirá el día del que quiere consultar el menú.
//A continuación se mostrará el plato que corresponda al día seleccionado.

//Crear un array asociativo 
    $menu = array(
        "lunes" => "macarrones",
        "martes" => "pescado",
        "miercoles" => "sopa",
        "jueves" => "lentejas",
        "viernes" => "ensalada",
        "sabado" => "lasaña",
        "domingo" => "pizza",
    );
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $diaElegido = $_POST["dia"];
        if (array_key_exists($diaElegido, $menu)) {
            $platoDia = $menu[$diaElegido];
            echo "<h1 style= 'color:blue'>El plato del $diaElegido es: $platoDia</h1>";
        } else {
            echo "<h1 style= 'color:red'>No hay comida</h1>";
        }        
    } 
  ?>
</body>
</html>