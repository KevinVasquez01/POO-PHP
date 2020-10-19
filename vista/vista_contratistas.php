<html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
 bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
    <body>
        <?php
            include "empleado.php";
            include "planta.php";
            include "form_contratista.php";
            $formulario = new FormularioContratista;
            $formulario->mostrar();
        ?>
        </body>
</html>