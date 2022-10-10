<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="/css/styles_generic.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <main>
            <div class="bloque1">
                <?php
                // var_dump($_GET);

                echo '<br/>';
                if ((bool) ['nombre'] == true && (bool) $_GET['edad'] == true) {
                    $nombre = $_GET['nombre'];
                    $edad = $_GET['edad'];

                    echo "Hola, $nombre<br>"
                    . "Tienes $edad años<br />";
                } else {
                    echo 'Introduce tu nombre y tu edad.<br />';
                }
                echo '<div><a href="index_formulario.html">Volver</a></div>';
                ?>
            </div>
        </main>
    </body>
</html>

