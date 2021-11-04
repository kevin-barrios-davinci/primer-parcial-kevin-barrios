<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>

    <h1>Hola, esta es la lista de números que pediste</h1>
    <table>
    <tr>
    
    <?php

        $minimo = $_POST['minimo'];
        $maximo = $_POST['maximo'];

        echo '<ul>';

        for ($i=$minimo; $i <= $maximo; $i++) { 
            echo '
            <li>'.$i.'</li>
            ';
        }

        echo '</ul>'

    ?>
</table>
</tr>
    <a href="index.php">Volver a la página de inicio</a>

</body>
</html>