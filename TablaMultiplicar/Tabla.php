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
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <main>
            <table border=1px>                
                <?php
                for ($i = 0; $i < 11; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 11; $j++) {
                        // $row .=
                        echo '<td>' . "$i" . '*' . "$j = " . $i * $j . '</td>';
                        //echo $row;
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
