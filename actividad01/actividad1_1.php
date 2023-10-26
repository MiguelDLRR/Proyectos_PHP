<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    /*Escribir un programa en PHP que contenga una variable que guardará la edad de una persona en años. 
    El programa debe decir si la persona se encuentra en edad de trabajar (entre 16 y 65, guarda estos valores en constantes) 
    y cuántos años faltarían para la jubilación.*/

    //SOLUCION

    //  Primero definimos las dos constantes de las edades maximas y minimas

    define ("edadMinima" , 16);
    define ("edadMaxima" , 65);

    /*creamos una variable con la edad de la persona, en un programa más avanzado 
    seria el usuario el que introdujese este dato*/

    $edadPersona = 19;

    if($edadPersona >= edadMinima && $edadPersona <= edadMaxima ){
        
    //calculo para saber los años que quedan para la jubilacion 
        $añosRestantes = edadMaxima - $edadPersona;
        echo '<h1>La persona se encuentra en edad de trabajar y le quedan: '. $añosRestantes . 'años para jubilarse</h1>';
    }
    else{

        echo '<h1>No está en edad de trabajar</h1>';
    }

    ?>   
</body>
</html>



