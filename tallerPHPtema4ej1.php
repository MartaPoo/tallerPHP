<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 4 - ejercicio 1</h1>
        <p>Ejercicio con Operadores de Asignación y Condicionales</p>

        <?php 
            $variable=100;
            echo "<p>la variable vale:  $variable</p>";
            
            $variable +=1;
            echo "<p>usando '+= 1' a la variable se le suma 1 y se queda como : $variable</p>";
            
            $variable -=1;
            echo "<p>usando '-= 1' a la variable se le resta 1 y se vuelve a quedar como : $variable</p>";
            
            $variable *= 100;
            echo "<p>usando '*= 100' a la variable se multiplica por 100 y se queda: $variable</p>";
            
            $variable /= 5;
            echo "<p>usando '/= 5' a la variable se divide por 5 y se queda: $variable</p>";

        ?>
           
    </body>
</html>