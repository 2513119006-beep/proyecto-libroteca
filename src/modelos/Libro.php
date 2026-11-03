<?php
declare(strict_types = 1);

require_once __DIR__ . '/Categoria.php';

class Libro {
    private const CAMPOS_OBLIGATORIOS = [
        'id', 'nombre', 'autor', 'categoria', 'precio', 'imagen', 'stock',
    ];

    private int $id;
    private string $nombre;
    private string $autor;
    private Categoria $categoria;
    private float $precio;
    private string $imagen;
    private int $stock;

    public function __construct(
        int $id,
        string $nombre,
        string $autor,
        Categoria $categoria,
        float $precio,
        string $imagen,
        int $stock
    ){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->stock = $stock;
    }

    private static function exigirCampos(array $registro): void {
        foreach (self::CAMPOS_OBLIGATORIOS as $campo) {
            if (!array_key_exists($campo, $registro)) {
                throw new InvalidArgumentException("El libro no tiene el campo " . $campo);
            }
        }
    }

    public static function desdeArreglo(array $registro): Libro {
        self::exigirCampos($registro);

        return new Libro(
            (int) $registro['id'],
            (string) $registro['nombre'],
            (string) $registro['autor'],
            new Categoria((string) $registro['categoria']),
            (float) $registro['precio'],
            (string) $registro['imagen'],
            (int) $registro['stock']
        );
    }

    public function obtenerId(): int {
        return $this->id;
    }

    public function obtenerNombre(): string {
        return $this->nombre;
    }

    public function obtenerAutor(): string {
        return $this->autor;
    }

    public function obtenerCategoria(): Categoria {
        return $this->categoria;
    }

    public function obtenerPrecio(): float {
        return $this->precio;
    }

    public function obtenerImagen(): string {
        return $this->imagen;
    }

    public function obtenerStock(): int {
        return $this->stock;
    }

    public function estaDisponible(): bool {
        return $this->stock > 0;
    }

    public function obtenerPrecioFormateado(): string {
        return '$' . number_format($this->precio, 2);
    }
}
?>