<!DOCTYPE html>
<!--
    --- Exercise C02PG01 ---
    Print a matrix with the output of different
    functions with different variable values.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="/css/styles_generic.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <main>
            <?php

            function unset_value($var) {
                unset($var);
            }

            function varMatrix() {
                $emptyArray = array();
                
                $vars;
                $i;

                $unset_val = unset_value($vars[$i]);

                $vars = array(null,
                    0,
                    true,
                    false,
                    '0',
                    '',
                    'foo',
                    $emptyArray,
                    $unset_val
                );

                $string_vars = array(
                    '$var = null',
                    '$var = 0',
                    '$var = true',
                    '$var = false',
                    '$var = "0"',
                    '$var = ""',
                    '$var = foo',
                    '$var = array()',
                    'unset($var)'
                );

                echo '<table>'
                . '<tr class=\'upperRow\'>'
                . '<th>Fila</th>'
                . '<th>Contenido de $var</th>'
                . '<th>isset($var)</th>'
                . '<th>empty($var)</th>'
                . '<th>(bool)$var</th>'
                . '<th>is_null($var)</th>'
                . '</th>';

                for ($i = 0; $i < 9; $i++) {
                    $bool_isset = isset($vars[$i]) ? 'true' : 'false';
                    $bool_empty = empty($vars[$i]) ? 'true' : 'false';
                    $bool_bool = $vars[$i] ? 'true' : 'false';
                    $bool_isnull = is_null($vars[$i]) ? 'true' : 'false';
                    echo '<tr>' . '<td>' . $i + 1 . '</td>'
                    . '<td>' . $string_vars[$i] . '</td>'
                    . '<td>' . $bool_isset . '</td>'
                    . '<td>' . $bool_empty . '</td>'
                    . '<td>' . $bool_bool . '</td>'
                    . '<td>' . $bool_isnull . '</td>'
                    . '</tr>';
                }
                echo '</table>';
            }

            varMatrix();
            ?>
            <div>
                <input type="button" value="Volver al inicio" onclick="back()" id="button" />
            </div>
        </main>
    </body>
</html>
