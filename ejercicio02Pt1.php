<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 - Parte 01</title>
</head>
<body>
    <!--
        Cada línea representa la política y la contraseña que debe cumplirla. La política de
        contraseñas indica el número mínimo y el número máximo de veces que se debe repetir la
        letra que hay a continuación. Así pues, “1-3 a” significa que la contraseña debe de contener
        la letra “a” un mínimo de 1 y un máximo de 3 veces. Siguiendo esta norma, en el ejemplo
        anterior hay un total de 2 contraseñas válidas.
    -->
    <?php
        $path = "input.txt.txt";
        if(file_exists($path)){
            $array = explode("\n", file_get_contents($path));

            $contValido = 0;
            $contNoValido = 0;
            foreach($array as $lineas){
                echo "<pre/>";print_r($lineas);
                $array2 = preg_split("/[\s-]+/", $lineas);

                $min = $array2[0];

                $max = $array2[1];
                
                $letraClave = substr($array2[2], 0, -1);
                
                $cadena = $array2[3];

                $veces = substr_count($cadena, $letraClave);
                
                echo "La letra clave aparece " . $veces . " veces " . "\n";
                
                if(($veces < $max && $veces > $min) || $veces == $min || $veces == $max){
                    echo "La contraseña es válida " . "\n";
                    $contValido++;
                }
                else{
                    echo "La contraseña no es válida " . "\n";
                    $contNoValido++;
                }
                echo "Hay " . $contValido . " contraseñas válidas " . "\n";
                echo "Hay " . $contNoValido . " contraseñas no válidas " . "\n";
            }
        }
        else{
            echo "El fichero no existe";
        }
    ?>
</body>
</html>