<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 2 - ejercicio 2</h1>
        <p>Ejercicio de Comentarios y Buenas Prácticas</p>

        <?php 
            // Función para calcular el área de un rectángulo
            function  calcularAreaRectangulo($ancho, $alto) {
                $area = $ancho*$alto; //Dentro de la función calculamos el área
                return $area; //Devuelvo el resultado para que cuando llame a la función me devuelva el cálculo anterior
            }
            // Llamada a la función con valores de prueba
            echo "El área del rectángulo es: " . calcularAreaRectangulo(5, 5);
            ?>
           
    </body>
</html>