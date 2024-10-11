<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 2 - ejercicio 1</h1>
        <p>Ejercicio con echo y HTML Embebido</p>

        <form method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <input type="submit" value="Enviar">
        </form>

        <?php 
            echo $_POST["nombre"]; 
        ?>
           
    </body>
</html>