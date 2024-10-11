<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 3 - ejercicio 3</h1>
        <p>Ejercicio con Variables y Constantes</p>

        <form method="POST">
            <label for="cantidad">Cantidad:</label><br>
            <input type="text" id="cantidad" name="cantidad"><br><br>
            <input type="submit" value="Calcular interés">
        </form>

        <?php 
            define("TASA_INTERES", 0.05);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cantidad = $_POST["cantidad"];

                $resultado = $cantidad * TASA_INTERES;
            }
            
            echo "El interés es de $resultado euros";

        ?>
           
    </body>
</html>