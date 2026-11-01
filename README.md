# proyecto-libroteca

Catálogo de libros con consulta de detalles, filtrado y registro de nuevos títulos. Proyecto de la asignatura Aplicaciones Web (E-APW-2), grupo 401.

## Vista previa

https://github.com/2513119006-beep/proyecto-libroteca

## Dominio y entidades

| Entidad del curso | Equivalente en mi proyecto |
|---|---|
| Categoria | Género literario |
| Producto | Libro |
| Cliente / Usuario | Lector / Usuario |
| Pedido + DetallePedido | Reserva / Préstamo de libro |

## Estructura

    ```text
proyecto-libroteca/
├── datos/
│   └── datos.json              catálogo de 6 libros
├── docs/
│   └── checklist-ux.md         evaluación heurística de usabilidad
├── practica-3-1/              prácticas anteriores de HTML5
└── public/
    ├── assets/css/estilos.css  hoja de estilos del sitio
    ├── img/sin-portada.svg     imagen de portada por defecto
    ├── index.php               inicio
    ├── libros.php              listado de libros
    ├── libro-detalle.php       ficha de un libro (?id=)
    ├── agregar-libro.php       formulario para agregar un libro
    └── contacto.php            contacto

## Estado

Unidad II (front end) completa. Siguiente: Unidad III (back end en PHP).

## Bitácora U2S06

1. {{¿Qué aprendí?: Aprendí a estructurar interfaces responsivas combinando Flexbox y CSS Grid, creando componentes dinámicos accesibles (migas de pan) y aplicando las 10 heurísticas de Nielsen para prevenir errores de UX.}}
2. {{¿Qué corregí?: Implementé validación visual para campos requeridos (.input-error), corregí la alineación de componentes mediante variables globales de CSS y estructuré el catálogo en cuadrícula.}}
3. {{¿Qué se me dificultó o falta por mejorar?: Ajustar la jerarquía visual de los componentes en pantallas pequeñas y sincronizar las variables personalizadas de CSS con la estructura requerida.}}