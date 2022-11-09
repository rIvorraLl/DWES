<?php
declare(strict_types=1);
?>
<html>
    <head>
        <title>Objetos y cargadores</title>
        <link rel="stylesheet" href="/css/styles_generic.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <main>
            <h1>Enterprise workers</h1>
            <?php
            include_once 'Cargador.php';

            $magaliSzardos = new Informaticos();
            $magaliSzardos->setName('Magali Szardos');
            $magaliSzardos->setPhone('345123764');
            $magaliSzardos->setRole('Programmer');
            $magaliSzardos->setAddress('23 Jackson St. Michigan');
            $magaliSzardos->setSalary(140000);
            $magaliSzardos->setAreaOfWork('Back end PHP development');
            $magaliSzardos->setCurrentProject('Main web: refactoring');
            $magaliSzardos->printPersonalData();

            $mikeSmith = new Informaticos();
            $mikeSmith->setName('Mike Smith');
            $mikeSmith->setPhone('347237529');
            $mikeSmith->setRole('Programmer');
            $mikeSmith->setAddress('35 Victoria Avenue, Michigan');
            $mikeSmith->setSalary(135000);
            $mikeSmith->setAreaOfWork('Front end JavaScript development');
            $mikeSmith->setCurrentProject('Add: web functionality');
            $mikeSmith->printPersonalData();

            $alexJones = new Informaticos('Alex Jones',
                    'System administrator',
                    '555325268',
                    '23 Ammonia Avenue, Michigan',
                    120000,
                    'Server maintenance',
                    'Mainframe');
            $alexJones->printPersonalData();
            ?>
            <div class="bloque1">
                <input type="button" value="Volver al inicio" onclick="back()" id="button" />
            </div>
        </main>

    </body>
</html>