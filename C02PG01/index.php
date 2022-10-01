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
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php

        function unset_value($var) {
            unset($var);
        }

        function varMatrix() {
            $i = 0;
            $emptyArray = array();

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
                echo '<tr>' . '<th>' . $i + 1 . '</th>'
                . '<th>' . $string_vars[$i] . '</th>'
                . '<th>' . $bool_isset . '</th>'
                . '<th>' . $bool_empty . '</th>'
                . '<th>' . $bool_bool . '</th>'
                . '<th>' . $bool_isnull . '</th>'
                . '</tr>';
            }
            echo '</table>';
        }

        varMatrix();
        ?>
    </body>
</html>
