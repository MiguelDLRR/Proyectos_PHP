<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
 <legend>Calculadora</legend>
 <form method="POST" action="calculos.php">
    
 <legend>Introduzca los números</legend>
    Primer operador:<input type="text" name="operador1" id="operador1" placeholder="introduce el primer operador"><br>
    Segundo operador:<input type="text" name="operador2" id="operador2" placeholder="introduce el segundo operador"><br>

 <legend>Seleccione una operacion</legend>
    <input type="radio" name="operacion" value="suma">Sumar</input>
    <input type="radio" name="operacion" value="resta">Restar</input>
    <input type="radio" name="operacion" value="multiplicacion">Multiplicar</input>
    <input type="radio" name="operacion" value="division">Dividir</input> <br>

    <button type="submit">Calcular</button>

 </form>
 
</body>
</html>