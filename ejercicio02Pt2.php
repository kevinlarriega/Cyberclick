<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 - Parte 02</title>
</head>
<body>
    <!--
        En realidad, la política describe lo siguiente: dos posiciones en la contraseña donde el
        número indica la posición del carácter (siendo 1 el primero, 2 el segundo… es decir, no hay
        índice 0). Entonces, exactamente 1 de las dos posiciones que aparecen deben de contener
        el carácter marcado, otras ocurrencias del carácter son irrelevantes.
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
                
                $caracteres = preg_split('//', $cadena);
                
                print_r($caracteres);
                
                if(($letraClave == $caracteres[$min] && $letraClave == $caracteres[$max]) || ($letraClave != $caracteres[$min] && $letraClave != $caracteres[$max])){
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