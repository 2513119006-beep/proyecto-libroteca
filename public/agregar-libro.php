<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libroteca - Agregar libro</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <header>
        <h1>Bienvenido a Libroteca</h1>
        <nav aria-label="menu-principal">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="libros.php">Catálogo</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Agregar Nuevo Libro</h2>
            <form id="formularioLibro" action="#" method="post" novalidate>
                <div class="campo">
                    <label for="nombre">Nombre del libro:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <div class="campo">
                    <label for="autor">Autor:</label>
                    <input type="text" name="autor" id="autor" required>
                </div>

                <div class="campo">
                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                </div>

                <div class="campo">
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0" required>
                </div>

                <div class="campo">
                    <label for="imagen">Imagen (ruta):</label>
                    <input type="text" name="imagen" id="imagen" placeholder="img/mi-libro.jpg">
                </div>

                <div class="campo">
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" min="0" max="999" aria-describedby="ayudaStock">
                    <p id="ayudaStock" class="texto-secundario">Piezas disponibles, entre 0 y 999</p>
                    <p id="errorStock" class="mensaje-error" style="display: none;">Escribe un número entero entre 0 y 999.</p>
                </div>

                <button type="submit">Agregar Libro</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2026 Libroteca. Todos los derechos reservados.</p>
    </footer>

    <!-- SCRIPT DE VALIDACIÓN EXCLUSIVO PARA STOCK -->
    <script>
        const formulario = document.getElementById('formularioLibro');
        const stockInput = document.getElementById('stock');
        const errorStock = document.getElementById('errorStock');

        function validarStock() {
            const valor = stockInput.value.trim();
            const num = Number(valor);

            // Si está vacío, no es un número entero válido o está fuera del rango 0-999
            if (valor === '' || isNaN(num) || !Number.isInteger(num) || num < 0 || num > 999) {
                errorStock.style.display = 'block';
                stockInput.classList.add('input-error');
                return false;
            } else {
                errorStock.style.display = 'none';
                stockInput.classList.remove('input-error');
                return true;
            }
        }

        // Se valida al presionar el botón de enviar
        formulario.addEventListener('submit', function(e) {
            const esValido = validarStock();
            if (!esValido) {
                e.preventDefault(); // Detiene el envío del formulario si hay error
            }
        });

        // Se valida en tiempo real mientras el usuario escribe o cambia el número
        stockInput.addEventListener('input', validarStock);
        stockInput.addEventListener('change', validarStock);
    </script>
</body>
</html>