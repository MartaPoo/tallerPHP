<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 3 - ejercicio 2</h1>
        <p>Ejercicio con Tipos Compuestos (Arrays Multidimensionales)</p>

        <?php 
            // Array multidimensional de alumnos
            $alumnos = [
                [
                    "nombre" => "Marta", 
                    "edad" => 24, 
                    "materias" => [
                        ["nombre" => "Matemáticas", "calificacion" => 5],
                        ["nombre" => "Inglés", "calificacion" => 10],
                        ["nombre" => "Lengua", "calificacion" => 8]
                    ]
                ],
                [
                    "nombre" => "Javi", 
                    "edad" => 28, 
                    "materias" => [
                        ["nombre" => "Matemáticas", "calificacion" => 6],
                        ["nombre" => "Inglés", "calificacion" => 9],
                        ["nombre" => "Lengua", "calificacion" => 7]
                    ]
                ],
                [
                    "nombre" => "Isabel", 
                    "edad" => 19, 
                    "materias" => [
                        ["nombre" => "Matemáticas", "calificacion" => 8],
                        ["nombre" => "Inglés", "calificacion" => 7],
                        ["nombre" => "Lengua", "calificacion" => 9]
                    ]
                ]
            ];

            // Mostrar la información y calcular el promedio
            foreach ($alumnos as $alumno) {
                $sumaCalificaciones = 0;

                foreach ($alumno["materias"] as $materia) {
                    $sumaCalificaciones += $materia["calificacion"];
                }

                $promedio = $sumaCalificaciones / 3;

                echo "<p>Alumno: " . $alumno["nombre"] . "<br>";
                echo "Edad: " . $alumno["edad"] . "<br>";
                echo "Promedio de calificaciones: " . number_format($promedio, 2) . "</p>";
            }
        ?>
    </body>
</html>
