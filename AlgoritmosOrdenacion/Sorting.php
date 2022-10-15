<!DOCTYPE html>
<html>
    <head>
        <title>Formulario con persistencia local</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/styles_generic.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <main>
            <div>
                <?php
                // Sección de generación e impresión de  funciones de prueba

                $vacio = [];
                $ordenado = [];
                for ($i = 0; $i < 101; $i++) {
                    $ordenado[$i] = $i;
                }
                echo '<b>ARRAYS</b><br/><br />Array vacía<br /><br />';
                $printOrdenado = 'Array números ordenados de menor a mayor<br />';
                foreach ($ordenado as $value) {
                    $printOrdenado .= $value . ' ';
                }
                echo $printOrdenado . '<br/><br />';
                $printInverso = 'Array números ordenados de mayor a menor<br/>';
                $inverso = array_reverse($ordenado);
                foreach ($inverso as $value) {
                    $printInverso .= $value . ' ';
                }
                echo $printInverso . '<br /><br />';
                $printDesordenados = 'Array números ordenados al azar<br />';
                $desordenados = [];
                for ($i = 0; $i < 101; $i++) {
                    $desordenados[$i] = rand(0, 100);
                }
                foreach ($desordenados as $value) {
                    $printDesordenados .= $value . ' ';
                }
                echo $printDesordenados . '</br><br />';
                $printNegativos = 'Array números desordenados, incluyendo números negativos<br />';
                $negativos = [];
                for ($i = 0; $i < 101; $i++) {
                    $negativos[$i] = rand(-50, 50);
                }
                foreach ($negativos as $value) {
                    $printNegativos .= $value . ' ';
                }
                echo $printNegativos . '</br><br />';

                /*
                 * Función bubble sort. Se ha añadido un booleano para controlar
                 * cuándo el array se encuentra ordenado e interrumpir así
                 * el ciclo de iteraciones, esperando mejorar algo  su
                 * eficiencia, lo que refleja el contador de iteraciones que
                 * también ha sido añadido.
                 */

                function bubble_sort($arrayNums) {
                    $control = false;
                    $iteraciones = 0;
                    for ($i = 0; $i < count($arrayNums); $i++) {
                        for ($j = 1; $j < count($arrayNums); $j++) {
                            if ($arrayNums[$j] < $arrayNums[$j - 1]) {
                                $temp = $arrayNums[$j - 1];
                                $arrayNums[$j - 1] = $arrayNums[$j];
                                $arrayNums[$j] = $temp;
                                $control = true;
                            }
                        }
                        if (!$control) {
                            $i = count($arrayNums);
                        } else {
                            $control = false;
                        }
                        $iteraciones++;
                    }
                    array_push($arrayNums, "<br />Contador de iteraciones: $iteraciones<br />");
                    return $arrayNums;
                }

                // Sección de impresión de los arrays ordenados

                $bubble1 = bubble_sort($vacio);
                $bubble2 = bubble_sort($ordenado);
                $bubble3 = bubble_sort($inverso);
                $bubble4 = bubble_sort($desordenados);
                $bubble5 = bubble_sort($negativos);

                function imprimirArray($arr) {
                    $substr = '';
                    foreach ($arr as $item) {
                        $substr .= $item . ' ';
                    }
                    return $substr;
                }

                echo '<div><br/><b>Bubble sort</b><br />Array vacía<br />'
                . imprimirArray($bubble1) . '<br />'
                . 'Array ordenada de menor a mayor<br />'
                . imprimirArray($bubble2) . '<br />'
                . 'Array ordenada de mayor a menor<br />'
                . imprimirArray($bubble3) . '<br />'
                . 'Array de números al azar<br />'
                . imprimirArray($bubble4) . '<br />'
                . 'Array de números al azar, incluyendo negativos<br />'
                . imprimirArray($bubble5) . '<br />';

                // Función de inserción directa.

                function insercion($arr) {
                    for ($i = 1; $i < count($arr); $i++) {
                        $pivote = $arr[$i];
                        $index = ($i - 1);
                        while ($index >= 0 && $arr[$index] > $pivote) {
                            $arr[$index + 1] = $arr[$index];
                            $index = $index - 1;
                        }
                        $arr[$index + 1] = $pivote;
                    }
                    array_push($arr, '<br />');
                    return $arr;
                }

                // Sección de impresión de los arrays ordenados

                $insercion1 = insercion($vacio);
                $insercion2 = insercion($ordenado);
                $insercion3 = insercion($inverso);
                $insercion4 = insercion($desordenados);
                $insercion5 = insercion($negativos);

                echo '<div><br/>'
                . '<b>Inserción directa</b><br />'
                . 'Array vacía<br/>'
                . imprimirArray($insercion1) . '<br />'
                . 'Array ordenada de menor a mayor<br />'
                . imprimirArray($insercion2) . '<br />'
                . 'Array ordenada de mayor a menor<br />'
                . imprimirArray($insercion3) . '<br />'
                . 'Array de números al azar<br />'
                . imprimirArray($insercion4) . '<br />'
                . 'Array de números al azar, incluyendo negativos<br />'
                . imprimirArray($insercion5) . '<br />';
                ?>
            </div>
            <div class="bloque1">
                <input type="button" value="Volver al inicio" onclick="back()" id="button" />
            </div>

        </main>
    </body>
</html>