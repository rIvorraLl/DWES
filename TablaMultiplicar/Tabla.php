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
            <table border=1px>
                <?php
                $first_row = '';
                echo '<tr><th>*</th>';
                for ($k = 0; $k < 11; $k++) {
                    $first_row .= "<th>$k</th>";
                }
                echo $first_row;
                echo '</tr>';
                for ($i = 0; $i < 11; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 11; $j++) {
                        if ($j == 0) {
                            echo "<th>$i</th><td>" . $i * $j . '</td>';
                        } else {
                            echo '<td>' . $i * $j . '</td>';
                        }
                    }
                    echo '</tr>';
                }
                ?>
            </table>
            <div>
                <input type="button" value="Volver al inicio" onclick="back()" id="button" />
            </div>
        </main>
    </body>
</html>
