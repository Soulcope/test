<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4b</title>
</head>

<body>
    <h2>Ejercicio4b.php</h2>
    <hr> <?php function recoge($variable)
            {
                //Comprobamos que la variable exista, sino la asignamos a null 
                $variable = $_GET[$variable] ?? null;
                if ($variable != null) {
                    $tmp = htmlspecialchars($variable);
                    $tmp = trim($tmp);
                    $tmp = strip_tags($tmp);
                } else {
                    $tmp = "";
                };
                return $tmp;
            }
            echo "<ul>";
            //Leemos cada una de las variables del formulario almacenadas en $_POST 
            foreach ($_GET as $key => $value) {
                $variable = recoge($key);
                $key = strtoupper($key);
                echo "<li>$key: $variable</li>";
            }
            echo "</ul>"; ?>
</body>
</html>
