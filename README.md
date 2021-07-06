<p align="center">
<img src="https://www.cyberclick.net/hubfs/2017-webiste/logo.svg" width="400">
</p>

# Prueba para la candidatura Junior Developer

Prueba técnica que consta de dos ejercicios, el segundo dividido en dos partes.

### _Tabla de contenidos:_
* **[1]  [Ejercicios](#ejercicios-)**
* **[2]  [Instalación](#instalación-)**
* **[3]  [Autor](#autor-)**

## Ejercicios 📋

Problemas:
1. Haz un script, con el lenguaje de programación de tu preferencia, que imprima por pantalla una lista ordenada de números del 1 al 100 sustituyendo los múltiplos de 3 por la cadena “cyber”, los múltiplos de 5 por la cadena “click” y los que son múltiplos de 3 y de 5 por “cyberclick”.

Nota: _En este ejercicio aparte de sustituir el múltiplo por la cadena correspondiente, también especifiqué al costado que número es, de esa manera es mucho más fácil hacer la verificación.._ 

2. Haz un script que soluciona la siguiente situación:

Nota: _En este ejercicio, tanto en la primera parte como en la segunda parte aparecen algunos supuestos errores que no encuentro cómo arreglarlos, sin embargo, estos supuestos errores no alteran la funcionalidad del ejercicio._

### Primera parte:
Imagina que estás en la cola para alquilar un coche, pero no avanza. La persona de la empresa está desesperada… Nadie puede hacer log in en la
aplicación! Y preguntan si hay algun developer en la sala. Miras alrededor y eres la única persona que tiene los conocimientos. Te acercas y te comentan el problema:
La base de datos de contraseñas parece que está corrupta, algunas de las
contraseñas que aparecen listadas no deberían de estar, ya que incumplen la política de empresa respecto contraseñas.
Para debugar el problema, han creado una lista de contraseñas guardadas en el
sistema corrupto y la política que deben de cumplir esas contraseñas.
Por ejemplo:
    - **1-3 a: abcde**   
    - **1-3 b: cdefg**
    - **2-9 c: ccccccccc**

Cada línea representa la política y la contraseña que debe cumplirla. La política de contraseñas indica el número mínimo y el número máximo de veces que se debe repetir la letra que hay a continuación. Así pues, “1-3 a” significa que la contraseña debe de contener la letra “a” un mínimo de 1 y un máximo de 3 veces. Siguiendo esta norma, en el ejemplo anterior hay un total de 2 contraseñas válidas.

¿Cuántas contraseñas válidas hay en tu input?

Hay 643 contraseñas válidas en este ejercicio.

### Segunda parte:
Aparentemente, has validado las contraseñas anteriores de forma correcta, pero el sistema sigue sin recibir lo que espera. La persona del mostrador se da cuenta de su error… Te ha explicado la política de contraseñas de su trabajo anterior!! 🙈.
En realidad, la política describe lo siguiente: dos posiciones en la contraseña donde el número indica la posición del carácter (siendo 1 el primero, 2 el segundo… es decir, no hay índice 0). Entonces, exactamente 1 de las dos posiciones que aparecen deben de contener el carácter marcado, otras ocurrencias del carácter son irrelevantes.
Entonces:
    - **1-3 a: abcde es válida: la posición 1 contiene a y la posición 3 no.**
    - **1-3 b: cdefg es no válida: Ni la posición 1 ni la 3 contienen el carácter b.**
    - **2-9 c: ccccccccc es no válida. Las dos posiciones 2 y 9 contienen el carácter c.**

Con esta política: ¿Cuántas contraseñas son válidas en el input?

Hay 612 contraseñas válidas en este ejercicio.


## Instalación 💻

_En la siguiente sección se explica qué se necesita para ejecutar los ejercicios_   

### Ejercicio 01
Para ejecutar el ejercicio 01 necesitas:
-- [Google Chrome](https://www.google.com/intl/es_es/chrome/) (_o cualquier navegador equivalente._)
-- [Visual Studio Code](https://code.visualstudio.com/)

### Ejercicio 02
Para ejecutar el ejercicio 02 necesitas:
-- [Google Chrome](https://www.google.com/intl/es_es/chrome/) (_o cualquier navegador equivalente._)
-- [Visual Studio Code](https://code.visualstudio.com/)
-- [XAMPP](https://www.apachefriends.org/es/index.html)

**También necesitamos el fichero de texto input.txt.txt**      

## Autor ✒️

- **Kevin Larriega Palomino**  
--   kevinlarriega@gmail.com  
-- https://github.com/kevinlarriega 
