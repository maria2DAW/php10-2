<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Operaciones</title>
        <link rel="stylesheet" href="css/estilos.css"/>
    </head>
    <body>
        <form name="form1" method="post" action="">
            <p>
                <label for="num1" ></label>
                <input type="text" name="num1" id="num1" />
                <label for="num2" ></label>
                <input type="text" name="num2" id="num2" />
                <label for="operacion" ></label>
                <select name="operacion" id="operacion">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Multiplicación</option>
                    <option>División</option>
                    <option>Módulo</option>
                    <option>Incremento</option>
                    <option>Decremento</option>
                </select>
            </p>
            
            <p>
                <input type="submit" name="button" id="button" onclick="prueba"/>
            </p>
        </form>
        
        <?php 
            include 'calcular.php';

            if(isset($_POST["button"]))
            {
                $numero1 = $_POST["num1"];
                $numero2 = $_POST["num2"];
                $operacion = $_POST["operacion"];

                calcular($operacion, $numero1, $numero2);
            }
        ?>
    </body>
</html>
