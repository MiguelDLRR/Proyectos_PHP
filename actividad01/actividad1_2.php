<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*En una escuela tenemos tres clases y queremos saber la cantidad de pupitres que necesitamos tener en total.
    Dependerá del número de alumnos por aula. Hay que tener en cuenta que en cada pupitre caben 2 alumnos. 
    Haz un programa en PHP en que se definan tres variables que contengan el número de alumnos que hay en cada 
    clase, y muestre el número total de pupitres que necesitaremos.
    */

    //SOLUCION

    //Creamos tres variables con el numero de alumnos de cada clase

    $clase1 = 26;
    $clase2 = 24;
    $clase3 = 21;

    //Creamos 3 variables con el numero total de pupitres en cada clase
    //usamos la funcion ceil para redondear a la alza ya que si no es resultado sería con decimales

    $pupitres1 = ceil ($clase1 / 2);
    $pupitres2 = ceil ($clase2 / 2);
    $pupitres3 = ceil ($clase3 / 2);

    //variable que recoge la suma de los pupitres de cada clase
    $pupitresTotal = $pupitres1 + $pupitres2 + $pupitres3;

    echo 'El numero total de pupitres que se necesitan para todas las clases es: '. $pupitresTotal;


    ?>   
</body>
</html>







