<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Escribir un programa que guarde en tres variables los coeficientes de una ecuación de segundo grado. 
    Debe guardar en otras dos variables los resultados, y mostrarlos por pantalla. Para hacer la raíz cuadrada, usar 
    la función de PHP sqrt (número).
    */
    // x2 + 2x - 8 = 0
    $varA = 1;
    $varB = 2;
    $varC = -8;

    //primero resolvemos las operaciones que están en la raiz cuadrada llamado discriminante 

    $discriminante = $varB * $varB - 4 * $varA * $varC;

    $resultado1 = (-$varB) + sqrt($discriminante) / 2* $varA ;

    $resultado2 = (-$varB) - sqrt($discriminante) / 2* $varA ;


    echo 'Los dos resultados de la ecuacion de segundo grado son: '. $resultado1 . ' y '. $resultado2 ;



    ?>   
</body>
</html>




