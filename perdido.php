<?php
session_start();

// Guardamos la palabra antes de destruirla
$palabra_secreta = isset($_SESSION['palabra']) ? $_SESSION['palabra'] : '';

// Destruimos la sesión
session_destroy();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Ahorcado - Derrota</title>
</head>
<body>
    <div class="contenedor">
        <h1>Lo siento, has perdido :</h1>
        <p>Te has quedado sin vidas. La palabra era: <strong><?php echo $palabra_secreta; ?></strong></p>
        
        <!-- Botón para jugar de nuevo regresando al index.php -->
        <form action="index.php" method="get">
            <button type="submit">Jugar de nuevo</button>   
        </form>
    </div>
</body>
</html>
