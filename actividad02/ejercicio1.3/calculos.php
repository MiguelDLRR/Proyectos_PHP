<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<h1>Resultado de la operación</h1>
 <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {       
        //lo primero es asignar el valor que introduce el usuario a las variables $operador.  Uso la funcion doubleval
        // para que no haya 
        //problemas con las operaciones matemáticas al introducir números decimales.
        $operador1= doubleval($_POST["operador1"]);
        $operador2= doubleval($_POST["operador2"]);
        $operacion= $_POST["operacion"];
        $resultado=0;

        if($operacion == "suma"){
            $resultado= $operador1 + $operador2;
            $textoOperacion= "suma";
        } elseif ($operacion == "resta"){
            $resultado= $operador1 - $operador2;
            $textoOperacion= "resta";
        } elseif ($operacion == "multiplicacion"){
            $resultado= $operador1 * $operador2;
            $textoOperacion= "multiplicacion";
        }elseif ($operacion == "division"){
            //condicion de salida si el segundo operador es =0
            if ($operador2 != 0) {
                $resultado= $operador1 / $operador2;
                $textoOperacion= "division";
            }else{
                echo "El segundo operador tiene que ser distinto a 0!!";
                return;
            }          
        }
        echo "El resultado de la $textoOperacion es $resultado"; 
    }   
 ?> 
 <form action="index.php">
    <input type="submit" value="Volver a la calculadora">
 </form>  
</body>
</html>





