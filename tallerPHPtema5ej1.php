<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 5 - ejercicio 1</h1>
        <p>Ejercicio con if, else, elseif para Determinar Edad</p>

        <form method="POST">
            <label for="nombre">Introduce tu edad:</label><br>
            <input type="text" id="edad" name="edad"><br><br>

            <input type="submit" value="Enviar">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $edad = $_POST["edad"];

            if ($edad>65){
                echo "Eres alcalde";
            }elseif ($edad>=36){
                echo "Eres adulto";
            }elseif ($edad>=18){
                echo "Eres adulto joven";
            }else{
                echo "Eres menor de edad";
            }
        }
        ?>
           
    </body>
</html>