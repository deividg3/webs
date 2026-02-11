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
<?php
if(isset($_GET['n'])){
    $n = $_GET['n'];
}
else {
    $n= 'cumpleañerx';
};
if(isset($_GET['y'])){
    $y = $_GET['y'];
}
else {
    $y= 'nuevos';
}; ?>
<h1>Muchas felicidades, <?= $n?> </h1>
<p> Hoy celebramos tus <?= $y?> años y queremos desearte un día lleno de alegría, sonrisas y momentos inolvidables.<br>
Que esta nueva etapa esté llena de éxitos, sueños cumplidos y muchas razones para seguir celebrando. ¡Disfruta tu día al máximo! ✨</p>
</body>

