<!DOCTYPE html>
<html>
    <head>
        <title>Pagos del socio</title>
    </head>
    <body>
<?php
/*  ===========================
    ARRAYS EN PHP
    ===========================

    ARRAY INDEXADO:
        Un array indexado es una colección de elementos en la
        que cada elemento tiene asignado un número de índice, comenzando por 0.
        Este tipo de arrays es muy útil cuando necesitas almacenar múltiples 
        valores en una sola variable.

        Ejemplo de Creación de un Array Indexado
            <?php
            $frutas = array("Manzana", "Banana", "Cereza");
            var_dump($frutas);
            ?>
        
            Explicación del Código
            array(): Función utilizada para crear el array.
            var_dump(): Muestra la estructura y el contenido del array, incluyendo índice
            y el valor de cada elemento.

        Ejemplo de Acceso a un Elemento del Array
            <?php
            $frutas = array("Manzana", "Banana", "Cereza");
            echo $frutas[0]; // Salida: Manzana
            ?>

        Ejemplo de Cambio de Valor en un Array
            <?php
            $frutas = array("Manzana", "Banana", "Cereza");
            $frutas[1] = "Pera"; // Cambia "Banana" por "Pera"
            var_dump($frutas);
            ?>

    ARRAY ASOCIATIVO:
        Permiten almacenar pares de clave-valor. A diferencia de los arrays indexados,
        donde cada elemento tiene un número de índice, en los arrays asociativos 
        las claves son valores que se asignan a cada elemento.

        Ejemplo de Creación de un Array Asociativo
            <?php
            $persona = array("nombre"=>"Juan", "edad"=>25, "ciudad"=>"Madrid");
            var_dump($persona);
            ?>

            Explicación del Código
            Claves y valores: En este ejemplo, las claves son "nombre", "edad" y "ciudad",
            mientras que los valores son "Juan", 25 y "Madrid".
            var_dump(): Muestra la estructura del array, incluyendo las claves y los valores.

        Ejemplo de Acceso a un Elemento del Array
            <?php
            $persona = array("nombre"=>"Juan", "edad"=>25, "ciudad"=>"Madrid");
            echo $persona["nombre"]; // Salida: Juan
            ?>

        Ejemplo de Cambio de Valor en un Array Asociativo
            <?php
            $persona = array("nombre"=>"Juan", "edad"=>25, "ciudad"=>"Madrid");
            $persona["edad"] = 26; // Cambia la edad de 25 a 26
            var_dump($persona);
            ?>

    ARRAY MULTIDIMENSIONAL:
        Un array que contiene uno o más arrays dentro de él. PHP soporta arrays multidimensionales
        de varios niveles (dos, tres, cuatro o más), pero los arrays con más de tres dimensiones 
        suelen ser difíciles de manejar.

        La dimensión de un array indica el número de índices que se necesitan para seleccionar
        un elemento. Por ejemplo:
        Un array bidimensional requiere dos índices para acceder a un elemento.
        Un array tridimensional requiere tres índices para acceder a un elemento.

        Ejemplo de Array Tridimensional
            <?php
            $puntajes = array(
                "2023" => array(
                    array("Juan", 85, 90),
                    array("Ana", 78, 95)
                ),
                "2024" => array(
                    array("Juan", 88, 92),
                    array("Ana", 80, 93)
                )
            );
            ?>
        
        Accediendo a los Datos de un Array Tridimensional
            <?php
            echo $puntajes["2023"][0][0] . " - Nota en 2023: " . $puntajes["2023"][0][1] . ", 
            " . $puntajes["2023"][0][2] . "<br>";
            echo $puntajes["2024"][1][0] . " - Nota en 2024: " . $puntajes["2024"][1][1] . ", 
            " . $puntajes["2024"][1][2] . "<br>";
            ?>
*/

/*  ===========================
3. DEFINIR ARRAY ASOCIATIVO MULTIDIMENSIONAL
    =========================== */
$socios = [
     "001" => [
        "id" => 1,
        "nombre" => "Laura",
        "apellidos" => "García Pérez",
        "dni" => "12345678A",
        "email" => "laura@example.com",
        "telefono" => "654321987",
     ],
    
    "002" => [
        "id" => "002",
        "nombre" => "Carlos",
        "apellidos" => "López Díaz",
        "dni" => "87654321B",
        "email" => "carlos.lopez@example.com",
        "telefono" => "611222333",
    ],


    "003" => [
        "id" => "003",
        "nombre" => "Ana",
        "apellidos" => "Martínez Ruiz",
        "dni" => "11223344C",
        "email" => "ana.martinez@example.com",
        "telefono" => "622333444",
    ],

];




?>
 </body>
</html>
      
