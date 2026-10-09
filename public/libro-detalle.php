<?php
$archivo = __DIR__ . '/../datos/datos.json';
$libros = json_decode(file_get_contents($archivo), true) ?? [];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$libro = null;
foreach ($libros as $l) {
    if ((int)$l['id'] === $id) { $libro = $l; break; }
}
if (!$libro) { http_response_code(404); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libroteca - Detalle libro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Bienvenido a Libroteca</h1>
        <nav class="menu-principal">
            <a href="index.php">Inicio</a>
            <a href="libros.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main>
        <?php if (!$libro): ?>
            <p>Libro no encontrado.</p>
        <?php else: ?>
            <article class="tarjeta-libro">
                <img src="<?= htmlspecialchars(!empty($libro['imagen']) ? $libro['imagen'] : 'img/sin-portada.svg') ?>" alt="Portada de <?= htmlspecialchars($libro['nombre']) ?>">
                <h2><?= htmlspecialchars($libro['nombre']) ?></h2>
                <p class="etiqueta-categoria"><?= htmlspecialchars($libro['categoria']) ?></p>
                <p class="texto-secundario">Autor: <?= htmlspecialchars($libro['autor']) ?></p>
                <p class="tarjeta-libro-precio">$<?= number_format($libro['precio'], 2) ?></p>
                <p class="texto-secundario">Stock: <?= (int)$libro['stock'] ?></p>
            </article>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2026 Libroteca. Todos los derechos reservados.</p>
    </footer>
</body>
</html>