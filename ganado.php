<?php
session_start();

// Guardamos la palabra antes de destruir la partida
$palabra_secreta = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : '';

// Destruimos la sesión para que al volver a jugar empiece de cero
session_destroy();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Ahorcado - Victoria</title>
</head>
<body>
    <div class="contenedor">
        <h1>¡Enhorabuena, has ganado!</h1>
        <p>Has adivinado la palabra secreta: <strong><?php echo $palabra_secreta; ?></strong></p>
        
        <!-- Botón para jugar de nuevo regresando al index.php -->

        <form action="index.php" method="get">
            <button type="submit">Jugar de nuevo</button>
        </form>
    </div>
</body>
</html>
