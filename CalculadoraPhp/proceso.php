<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
        /**
         * 
         * @author Sergio Rodríguez Prada
         * 
         */

        if(!isset($_POST['num1']) || !isset($_POST['num2']) || !isset($_POST['operacion'])){
            echo "<p>Error, Algún caja está vacía</p>";
            echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
        }else{
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];

            if($num1 = 0){
                $num1 = 0;
            }

            if(empty($operacion)){
                echo "<p>Error, no has seleccionado la operación</p>";
                echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
            }else{
                switch($operacion){
                    case "sumar":
                        echo "<h3>El resultado es: </h3>";
                        sumar($num1,$num2);
                        break;

                    case "restar":
                        echo "<h3>El resultado es: </h3>";
                        restar($num1,$num2);
                        break;

                    case "multiplicar":
                        echo "<h3>El resultado es: </h3>";
                        multiplicar($num1,$num2);
                        break;

                    case "dividir":
                        echo "<h3>El resultado es: </h3>";
                        dividir($num1,$num2);
                        break;
                    default:
                        echo "ERROR: operación no válida";
                        echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
                }
            }
        }

        /**
         * 
         * @return int la suma de 2 valores
         * @param int $num1 numero1
         * @param int $num2 numero2
         * 
         */
        function sumar($num1,$num2){
           return $num1+$num2;
        }

        /**
         * 
         * @return int la resta de 2 valores
         * @param int $num1 numero1
         * @param int $num2 numero2
         * 
         */
        function restar($num1,$num2){
            return $num1-$num2;
        }

        /**
         * 
         * @return int la multiplicación de 2 valores
         * @param int $num1 numero1
         * @param int $num2 numero2
         * 
         */
        function multiplicar($num1,$num2){
            return $num1*$num2;
        }

        /**
         * 
         * @return double la división de 2 valores
         * @param int $num1 numero1
         * @param int $num2 numero2
         * 
         */
        function dividir($num1,$num2){
            if($num2 == 0){
                $html = "<p>ERROR: No se puede dividir entre 0 </p>" .
                 "<p><a href='calculadora.html'>Volver al inicio </a></p>";
                return $html;
            }else{
                return $num1/$num2 ;
            }
        }
    ?>
</body>
</html>