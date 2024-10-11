<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 2 - ejercicio 3</h1>
        <p>Ejercicio con Variables y Constantes Complejas</p>

        <form method="POST">
            <label for="nombre">Nombre del planeta:</label><br>
            <input type="text" id="nombre" name="nombre"><br><br>

            <label for="masa">Ingresa la masa (en kg):</label><br>
            <input type="number" id="masa" name="masa"><br><br>

            <input type="submit" value="Calcular">
        </form>

        <?php 
            define("GRAVITY", 9.8);

            function gravedad($planeta, $masa){
                if ($planeta === "Tierra") {
                    return $masa * GRAVITY;
                } else {
                    return null; 
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $planeta = $_POST["nombre"];
                $masa = $_POST["masa"];

                $fuerza = gravedad($planeta, $masa);

                if ($fuerza !== null) {
                    echo "<p>La fuerza de gravedad aplicada en la Tierra para una masa de $masa kg es de $fuerza .</p>";
                } else {
                    echo "<p>Ese planeta no es la Tierra.</p>";
                }
            }
        ?>
           
    </body>
</html>
