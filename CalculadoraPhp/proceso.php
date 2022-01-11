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
        if(!isset($_POST['num1']) || !isset($_POST['num2']) || !isset($_POST['operacion'])){
            echo "<p>Error, Algún caja está vacía</p>";
            echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
        }else{
            $num1 = (int)$_POST['num1'];
            $num2 = (int)$_POST['num2'];
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
                        echo "<p>". $num1+$num2 . "</p>";
                        break;

                    case "restar":
                        echo "<h3>El resultado es: </h3>";
                        echo "<p>". $num1-$num2 . "</p>";
                        break;

                    case "multiplicar":
                        echo "<h3>El resultado es: </h3>";
                        echo "<p>". $num1*$num2 . "</p>";
                        break;

                    case "dividir":
                        if($num2 == 0){
                            echo "<p>ERROR: No se puede dividir entre 0 </p>";
                            echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
                        }else{
                            echo "<h3>El resultado es: </h3>";
                            echo  "<p>". $num1/$num2 ;
                        }
                        break;
                    default:
                        echo "ERROR: operación no válida";
                        echo "<p><a href='calculadora.html'>Volver al inicio </a></p>";
                }
            }
        }
    ?>
</body>
</html>