<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 5 - ejercicio 2</h1>
        <p>Ejercicio con Bucle do-while</p>
        
        <form method="POST">
            <label for="num">Introduce un número positivo:</label><br>
            <input type="text" id="num" name="num"><br><br>

            <input type="submit" value="Enviar">
        </form>

        <?php 
        $num = -1;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            do {
                $num = $_POST["num"];
                
                if ($num < 0) {
                    echo "<p style='color:red;'>Por favor, introduce un número positivo.</p>";
                }

            } while ($num < 0); // Repite hasta que el número sea positivo

            if ($num >= 0) {
                echo "<p>El número positivo ingresado es: $num</p>";
            }
        }
        ?>
    </body>
</html>
