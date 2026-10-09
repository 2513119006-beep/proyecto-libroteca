<?php
$archivo = __DIR__ . '/../datos/datos.json';
$libros = json_decode(file_get_contents($archivo), true) ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libroteca - Libros</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Libros</h1>
        <nav class="menu-principal">
            <a href="index.php">Inicio</a>
            <a href="libros.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Catálogo</h2>
            <a href="alta-libro.php">Agregar libro +</a>
            <?php if (empty($libros)): ?>
                <p>No hay libros registrados.</p>
            <?php else: ?>
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
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Libroteca. Todos los derechos reservados.</p>
    </footer>
</body>
</html>