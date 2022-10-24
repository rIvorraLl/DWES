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
        <div class="bloque1">
            <h3>Agenda de contactos</h3>
        </div>
        <?php
        if (isset($_GET['arrayNombreTelefono'])) {
            $arrayNombreTelefono = $_GET['arrayNombreTelefono'];
        } else {
            $arrayNombreTelefono = [];
        }
        if (isset($_GET['enviar'])) {
            $nombre = filter_input(INPUT_GET, 'nombre');
            $telefono = filter_input(INPUT_GET, 'telefono');
            if (empty($nombre)) {
                echo '<div class="bloque1">'
                . '<p>El campo de nombre no puede quedar vacío.<br />'
                . 'Por favor, introduzca un nombre a continuación.</p></div>';
            } else if (empty($telefono)) {
                unset($arrayNombreTelefono[$nombre]);
            } else {
                $arrayNombreTelefono[$nombre] = $telefono;
            }
        }
        ?>
        <div class="bloque1">
            <form>
                <?php
                foreach ($arrayNombreTelefono as $n => $t) {
                    echo '<input type="hidden" name="arrayNombreTelefono['
                    . $n . ']" '
                    . 'value="'
                    . $t . '"/>';
                }
                ?>
                <label>Nombre:<input type="text" name="nombre"/></label><br />
                <label>Teléfono:<input type="number" name="telefono"/></label><br />
                <input type="submit" name='enviar' value="enviar"/><br />
            </form>
        </div>
        <br />
        <?php
        if (count($arrayNombreTelefono) == 0) {
            echo '<div class="bloque1">No hay contactos en la agenda.</div>';
        } else {
            echo '<div class="bloque1">';
            foreach ($arrayNombreTelefono as $nm => $tl) {
                echo $nm . ': ' . $tl . '<br />';
            }
        }
        ?>
        <div class="bloque1">
            <input type="button" value="Volver al inicio" onclick="back()" id="button" />
        </div>
    </body>
</html>