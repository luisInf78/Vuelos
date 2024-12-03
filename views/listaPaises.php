<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Paises</title>
</head>
<body>

    <ul>
        
        <?php foreach ($paises as $pais): ?>
            <li><?php echo $pais['idPais'] . ' (' . $pais['nombre'] . ')'; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>