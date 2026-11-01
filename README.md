# Libroteca

Proyecto escolar en PHP: catálogo de una librería en línea (equivalente a TiendaTec, con temática de libros). Los libros se leen de `datos/datos.json`.

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

    ## Bitácora de Cierre - Unidad II

- **¿Qué aprendí?:** Aprendí a estructurar interfaces responsivas combinando Flexbox y CSS Grid, creando componentes dinámicos accesibles (migas de pan) y aplicando las 10 heurísticas de Nielsen para prevenir errores de UX.
- **¿Qué corregí?:** Implementé validación visual para campos requeridos (`.input-error`), corregí la alineación de componentes mediante variables globales de CSS y estructuré el catálogo en cuadrícula.
- **¿Qué se me dificultó o falta por mejorar?:** Ajustar la jerarquía visual de los componentes en pantallas pequeñas y sincronizar las variables personalizadas de CSS con la estructura requerida.