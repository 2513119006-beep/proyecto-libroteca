<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libroteca - Agregar libro</title>
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
        <section>
            <h2>Agregar Nuevo Libro</h2>
            <form action="#">

                <label for="nombre">Nombre del libro:</label>
                <input type="text" name="nombre" id="nombre" required>
                <br>
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" required>
                <br>
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" required>
                <br>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" step="0.01" min="0" required>
                <br>
                <label for="imagen">Imagen (ruta):</label>
                <input type="text" name="imagen" id="imagen" placeholder="img/mi-libro.jpg">
                <br>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" min="0" required>
                <br>
                <button type="submit">Agregar Libro</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Libroteca. Todos los derechos reservados.</p>
    </footer>
</body>
</html>