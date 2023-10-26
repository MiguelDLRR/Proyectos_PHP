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
    Queremos saber si una pizza redonda es más grande que una rectangular. 
    Crea un programa en que se declaren 3 variables: 
    una para el radio de la pizza redonda, y las otras dos para el ancho y el alto de la pizza ractangular. 
    El programa debe calcular qué pizza es más grande y mostrarnos un mensaje diferente para cada uno de los 
    siguientes casos:
    La pizza redonda es más grande que la rectangular.
    La pizza rectangular es más grande que la redonda.
    Las dos pizzas son igual de grandes.
    Para utilizar el número π en PHP puedes observar este link: http://php.net/manual/es/math.constants.php.
    */

    //variable para la pizza redonda
    $radio = 3 ;

    //variable para la rectangular
    $ancho = 20 ;
    $alto = 5 ;

    //calculamos el area de la pizza redonda

    $areaPizzaRedonda = M_PI * ($radio*$radio) ;

    //calculamos el area de la pizza rectangular

    $areaPizzaRectangular = $ancho * $alto ;

    if ($areaPizzaRedonda > $areaPizzaRectangular){

        echo 'La pizza redonda es más grande que la pizza rectangular';

        }elseif($areaPizzaRedonda < $areaPizzaRectangular){

            echo 'La pizza rectangular es más grande que la redonda';

            }else {

                echo 'Las dos pizzas son igual de grandes';
                }    


        
    ?>   
</body>
</html>








