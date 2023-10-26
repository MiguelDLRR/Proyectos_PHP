<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Comprobador de Palíndromos</title>
</head>
<body>
  <legend>Comprobador de Palíndromos</legend>
  <form method= "POST">
    Texto:<input type="text" name="texto" id="texto" placeholder="introduce un texto"><br>
    <input type="submit" name="Enviar" />
  </form> 
  
  <?php
    //Crea una aplicación que parta de un formulario en que se pida al usuario introducir un texto.
    //El programa nos dirá si el texto introducido es un palíndromo o no. Ten en cuenta que el texto 
    //que introduzca el usuario puede tener espacios.
 
    //Creamos la funcion para comprobar que el texto introducido por el usuario es un palindromo    
    function Palindromo($texto) {
        // para eliminar los espacios y convertir el texto en minúsculas y así poder compararlo 
        //utilizo las funciones de php str_replace(introduciendo 3 parámetros) y dentro de esa 
        //funcion la de transformar el texto en minúsculas strtolower
        $texto = str_replace('', '', strtolower($texto)); 

        return $texto == strrev($texto);

    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      $texto = $_POST["texto"];
        if (Palindromo($texto)) {
            echo "<h1 style='color:green'>'$texto' es  un palíndromo</h1>";
        } else {
            echo "<h1 style='color:red'>'$texto' no es  un palíndromo</h1>";
        }
        
    }
  ?>
</body>
</html>