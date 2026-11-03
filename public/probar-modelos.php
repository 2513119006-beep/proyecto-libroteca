<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/modelos/Categoria.php';
require_once __DIR__ . '/../src/modelos/Libro.php';

$novela = new Categoria('Novela');
$ensayo = new Categoria('Ensayo');

echo $novela->obtenerNombre() . '<br>';
echo $ensayo->obtenerNombre() . '<br>------------------<br>';

$libro = Libro::desdeArreglo([
    'id' => 1,
    'nombre' => 'Cien años de soledad',
    'autor' => 'Gabriel García Márquez',
    'categoria' => 'Novela',
    'precio' => 299.00,
    'imagen' => 'img/sin-portada.svg',
    'stock' => 12,
]);

echo $libro->obtenerNombre() . ' por ' . $libro->obtenerAutor() . ' (' . $libro->obtenerCategoria()->obtenerNombre() . ') y cuesta ' . $libro->obtenerPrecioFormateado() . '<br>';
echo $libro->estaDisponible() ? 'Existe producto' : 'Agotado';
?>