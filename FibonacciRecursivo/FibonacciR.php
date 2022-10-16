<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci recursivo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles_generic.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <main>
        <div class="bloque1">
            <?php
            function fibonacci_recursivo($n)
            {
                if ($n == 0)
                {
                    return 0;
                }
                else if ($n == 1)
                {
                    return 1;
                }
                else
                    return (fibonacci_recursivo($n - 1) + fibonacci_recursivo($n - 2));
            }
            echo 'La secuencia de Fibonacci tiene los siguientes 20 primeros términos:<br>';
            $i = 20;
            for ($j = 0; $j < $i; $j++)
            {
                echo fibonacci_recursivo($j) . '<br/>';
            }
            ?>
            <div class="bloque1">
                <input type="button" value="Volver al inicio" onclick="back()" id="button" />
            </div>
        </div>
    </main>
</body>

</html>