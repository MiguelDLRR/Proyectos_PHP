<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Una persona quiere saber si puede pagar el alquiler de un piso del centro de la ciudad. 
    Sabemos que esta persona trabaja 7 horas diarias durante 5 días a la semana (guarda esta información en constantes).
    Crea un programa que guarde en tres variables lo que cobra la persona por una hora de trabajo, 
    el precio del alquiler mensual, y los gastos aproximados mensuales que tiene esta persona en otros conceptos.
    El programa debe calcular si la persona puede permitirse pagar el alquiler, o no. Supón que el mes son 4 semanas.
    */

    //Creamos las dos constantes

    define("horasTrabajo", 7);
    define("diasTrabajo", 5);

    //variables del programa

    $sueldoHora = 7;
    $precioAlquiler = 600;
    $gastosExtra = 300;

    //variable para saber los gastos totales al final del mes
    $gastosTotales = $precioAlquiler + $gastosExtra;

    //calculos para el sueldo mensual

    $sueldoMensual = ($sueldoHora * horasTrabajo * diasTrabajo)*4;

    //echo $sueldoMensual;

    if($sueldoMensual >= $gastosTotales){

        echo '<h1>Puedes pagar el alquiler</h1>';

        }else{

            echo '<h1>No puedes pagar el alquiler</h1>';
        }
    ?>   
</body>
</html>





