# Hallazgos de Libroteca (`docs/checklist-ux.md`)

Tareas evaluadas: (a) encontrar un libro por su categoría, (b) abrir su ficha y regresar al catálogo, (c) agregar un libro nuevo. Recorridas en escritorio y en 375 px. Los hallazgos con prioridad "Sí" son los que se corrigen.

| # | Heurística | Dónde ocurre | Sev. | Mejora (como acción) | Prioridad |
|---|---|---|---|---|---|
| 1 | H1 Visibilidad del estado | Formulario `agregar-libro`: al enviar no hay confirmación y el libro no se guarda (`action="#"`) | 4 | Procesa el formulario con `method="post"`, guarda el libro en `datos.json` y muestra el mensaje "Libro agregado" | Sí |
| 2 | H10 Ayuda y documentación | `contacto`: dice "Contáctanos" pero no da correo, teléfono ni formulario | 3 | Agrega un correo, un horario de atención y un formulario con nombre, correo y mensaje | Sí |
| 3 | H9 Recuperarse de errores | `libro-detalle` con un id que no existe: solo aparece "Libro no encontrado." sin salida | 3 | Muestra un mensaje claro y un botón "Volver al catálogo" | Sí |
| 4 | H3 Control y libertad | `libro-detalle`: solo se regresa con el menú | 2 | Agrega una ruta de migas de pan o un enlace "Volver al catálogo" | No |
| 5 | H1 Visibilidad del estado | Menú de todas las vistas: "Inicio" siempre sale en negritas aunque estés en otra página | 2 | Marca la página actual con `aria-current` y un estilo subrayado, y quita el estilo de `nav a:first-child` | No |
| 6 | H2 Lenguaje del usuario | Formulario: el campo "Imagen (ruta)" pide una ruta técnica como `img/mi-libro.jpg` | 2 | Cambia la etiqueta a "Portada (opcional)" y agrega una línea de ayuda | No |
| 7 | H5 Prevención de errores | Formulario: los campos obligatorios no se distinguen hasta que falla el envío | 2 | Marca los obligatorios con asterisco y agrega la nota "* campo obligatorio" | No |
| 8 | H8 Diseño minimalista | `index`: la sección "Libros destacados" solo trae una frase y no muestra libros | 2 | Muestra tres libros reales o quita la sección y agrega un botón "Ver catálogo" | No |
| 9 | H4 Consistencia | `libros`: el título principal dice "Libros", y en las demás vistas "Bienvenido a Libroteca" | 1 | Usa el mismo título del sitio en todas las vistas | No |
| 10 | H2 Lenguaje del usuario | `libros`: el botón dice "Agregar producto +" en un sitio de libros | 1 | Cambia el texto a "Agregar libro +" | No |