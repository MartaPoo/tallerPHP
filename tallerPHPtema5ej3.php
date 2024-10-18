<!DOCTYPE html>
<html>
    <body>
        <h1>Tema 5 - ejercicio 3</h1>
        <p>Ejercicio con switch para Menús</p>

        <form method="POST" name="calculadora">
            <label>Introduce los valores:<br/></label>
            <input type="text" name="num1" /><br/><br/>
            <input type="text" name="num2" /><br/><br/>

            <label>Selecciona una operacion:<br/>
                <select name="lista">
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
            </label>
            <br/>
            <input type="submit" value="Resultado" />
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST['num1']);  
            $num2 = floatval($_POST['num2']); 
            $operacion = $_POST['lista'];

            switch($operacion){
                case 'sumar':
                    echo "El resultado de la suma es: " . ($num1 + $num2);
                    break;

                case 'restar':
                    echo "El resultado de la resta es: " . ($num1 - $num2);
                    break;

                case 'multiplicar':
                    echo "El resultado de la multiplicación es: " . ($num1 * $num2);
                    break;

                case 'dividir':
                    if ($num2 != 0) {
                        echo "El resultado de la división es: " . ($num1 / $num2);
                    } else {
                        echo "Error: No se puede dividir entre cero.";
                    }
                    break;

                default:
                    echo "Operación no válida.";
                    break;
            }
        }
        ?>
    </body>
</html>
