<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Felicitator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>¡Hola!</h1>
    <h2>Completa estos detalles para hacer una felicitación personalizada</h2>
    <form action="felicitator.php" method="get">
        <label>¿Cómo se llama? <input type="text" name="n"> </label>
        <label>¿Cuántos años cumple? <input type="number" name="y"> </label>
    <input type="submit" value="Crear felicitación"></form>

</body>