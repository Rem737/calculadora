<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h1>Calculadora</h1>
        <label for="1">Num 1</label>
        <input type="number" name="num1" id="1">
        <label for="2">Num 2</label>
        <input type="number" name="num2" id="2">

        <fieldset>
            <legend>Operaciones</legend>
            <input type="radio" name="operacion" value="suma" id="3" checked>
            <label for="3">Sumar</label>
            <input type="radio" name="operacion" value="resta" id="4">
            <label for="4">Restar</label>
            <input type="radio" name="operacion" value="multiplicacion" id="5">
            <label for="5">Multiplicar</label>
            <input type="radio" name="operacion" value="division" id="6">
            <label for="6">Dividir</label>
        </fieldset>

        <input type="submit" name="Calcular" value="calcular">
    </form>
    <div class="resultado">
    <?php
        if (isset ($_GET['Calcular'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operacion = $_GET['operacion'];
            switch ($operacion) {
                case 'suma' : echo '<p>La suma es: <b>'.($num1 + $num2).'</b></p>'; break;
                case 'resta' : echo '<p>La resta es: <b>'.($num1 - $num2).'</b></p>'; break;
                case 'multiplicacion' : echo '<p>La multiplicacion es: <b>'.($num1 * $num2).'</b></p>'; break;
                case 'division' : 
                    if ($num2 != 0){
                        echo '<p>La division es: <b>'.($num1 / $num2).'</b></p>'; break;
                    }
                    else {
                        echo '<p>No se puede dividir por <b>0</b>.</p>'; break;
                    }
                default : echo '<p><b>Debe elegir una operacion</b></p>'; break;
            }   
        }
    ?>
    </div>
</body>
</html>