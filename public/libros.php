<?php
$archivo = __DIR__ . '/../datos/datos.json';
$libros = json_decode(file_get_contents($archivo), true) ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libroteca - Libros</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Libros</h1>
        <nav aria-label="menu-principal">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="libros.php" aria-current="page">Catálogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Catálogo</h2>
            <a href="agregar-libro.php" class="boton-agregar">Agregar producto +</a>
            
            <?php if (empty($libros)): ?>
                <p>No hay libros registrados.</p>
            <?php else: ?>
                <div class="grid-libros">
                    <?php foreach ($libros as $libro): ?>
                        <article class="tarjeta-libro">
                            <img src="<?= htmlspecialchars(!empty($libro['imagen']) ? $libro['imagen'] : 'img/sin-portada.svg') ?>" alt="Portada de <?= htmlspecialchars($libro['nombre']) ?>">
                            <h3><?= htmlspecialchars($libro['nombre']) ?></h3>
                            <p class="etiqueta-categoria"><?= htmlspecialchars($libro['categoria']) ?></p>
                            <p class="texto-secundario">Autor: <?= htmlspecialchars($libro['autor']) ?></p>
                            <p class="tarjeta-libro-precio">$<?= number_format($libro['precio'], 2) ?></p>
                            <a class="enlace-detalle" href="libro-detalle.php?id=<?= (int)$libro['id'] ?>">Ver detalle</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>© 2026 Libroteca. Todos los derechos reservados.</p>
    </footer>
</body>
</html>