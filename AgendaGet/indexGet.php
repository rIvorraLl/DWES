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
        <br/> 
        <div class="bloque1">
            <form method="GET">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="telefono">Teléfono:</label><br>
                <input type="number" id="telefono" name="telefono"><br>
                <?php
                $arrayNombreEdad = '';
                $nombre = $_GET['nombre'];
                $telefono = $_GET['telefono'];
                // echo "<br/>$nombre <br /> $telefono<br />";
                $arrayNombreEdad .= ' ' . $nombre . ' ' . $telefono . '<br/>';
                $oculto = $_GET['oculto'];
                if (isset($oculto)) {
                    $arrayNombreEdad .= ' ' . $oculto;
                }
                ?>
                <input type='hidden' id='oculto' name='oculto' value='<?php echo $arrayNombreEdad; ?>'>
                <br />
                <?php
                ?>
                <button type = "submit">Enviar</button>
            </form>
        </div>
        <div class="bloque1">
            <?php
            echo $arrayNombreEdad;
            ?>
        </div>
        <div class="bloque1">
            <input type="button" value="Volver al inicio" onclick="back()" id="button" />
        </div>
    </body>
</html>
