<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 3 - ejercicio 1</h1>
        <p>Ejercicio con Tipos y Conversión</p>

        <?php 
            $x = "25";
            echo "<p>La variable como string: </p>";
            echo var_dump($x);
            $x = 25;
            echo "<p>La variable como entero: </p>";
            echo var_dump($x);
            $suma = $x + 10;
            echo "<p>Se le suma otro entero (10): </p>";
            echo $suma;
    

        ?>
           
    </body>
</html>