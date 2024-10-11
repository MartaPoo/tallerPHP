<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 4 - ejercicio 3</h1>
        <p>Ejercicio con Operador Ternario Anidado</p>

        <?php 
            $calificacion = 76;

            $nota = ($calificacion >= 90) ? "Sobresaliente" : (($calificacion >= 70) ? "Buena" : "Necesita mejorar");

            echo "<p>La calificación de $calificacion es clasificada como: $nota</p>";
        ?>
           
    </body>
</html>