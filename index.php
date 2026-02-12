<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FuteriAda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/8221/8221660.png" type="image/png">
</head>
<body>
    
<h1>FruteriAda</h1>

<?php
$json=file_get_contents('datos.json');
$data =json_decode($json,true);

/* echo '<pre><code>';
print_r($data);
echo '<pre><code>'; */

echo "<ul>";

foreach ($data['frutas'] as $item) {
    echo "<li>
    <h2>{$item['nombre']} {$item['icono']}</h2>
    <p>{$item['color']}</p>
    <h3>{$item['precio']} €</h3>
    </li>";
}

echo "</ul>"
?>

</body>