<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra de dni</title>
</head>
<body>
<legend>Calculador de letra de DNI</legend>
  <form method= "POST">
    Texto:<input type="number" name="numero" id="numero" placeholder="introduce un numero"><br>
    <button type="submit">Consultar letra</button>
  </form>   
  <?php
  $tabla =array(
    0 => "T",
    1 => "R",
    2 => "W",
    3 => "A",
    4 => "G",
    5 => "M",
    6 => "Y",
    7 => "F",
    8 => "P",
    9 => "D",
    10 => "X",
    11 => "B",
    12 => "N",
    13 => "J",
    14 => "Z",
    15 => "S",
    16 => "Q",
    17 => "V",
    18 => "H",
    19 => "L",
    20 => "C",
    21 => "K",
    22 => "E"
  );

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numeroIntroducido = $_POST["numero"];
    //control de error para que el numero introducido esté entre el 0 y el 22
    if ($numeroIntroducido >= 0 && $numeroIntroducido <=22) {
        $resto= $numeroIntroducido % 23;
        $letraDni= $tabla[$resto];
        echo " El número de DNI: $numeroIntroducido corresponde a la letra $letraDni";
    } else {
        echo "El número introducido no es válido, tiene que ser un número entre el 0 y el 22";
    }    
  }
  ?>
</body>
</html>