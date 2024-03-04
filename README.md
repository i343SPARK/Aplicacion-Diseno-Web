![Imagen de Portada](https://notion.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F9ce98aa2-1d54-4bf6-888c-b1b70c9ed90e%2Fzoom_background_cat.png?id=74e07120-9e46-4d6b-9eab-34f93bf5a626&table=block&spaceId=e12b42ac-4e54-476f-a4f5-7d6bdb1e61e2&width=2000&userId=&cache=v2)

## Datos del Estudiante

- **Nombre:** Pablo M. Salas González
- **Número de Matrícula:** 2925786
- **Carrera:** Ingeniería de Desarrollo en Software
- **Semestre:** 8vo Semestre

## Datos de la Materia

- **Nombre de la Materia:** Diseño de Apps Web
- **Profesor:** Cristopher Gerardo Gaytán Díaz

## Sobre Markdown

Markdown es un lenguaje de marcado ligero que se utiliza para añadir formato a textos en la web. Es popular debido a su simplicidad y, a menudo, se utiliza para crear archivos README, documentación de software, blogs y foros en línea. Con Markdown, puedes controlar fácilmente la visualización del documento; por ejemplo, puedes hacer que las palabras estén en negrita o en cursiva, agregar imágenes y crear listas, todo con unos pocos caracteres. Además, debido a su simplicidad y eficiencia, es un estándar para la documentación en plataformas de desarrollo como GitHub.

### Opciones de Etiquetado en Markdown

- **Encabezados:** Utiliza `#` para diferentes niveles de encabezados.
- **Énfasis:** Utiliza `*` o `_` para *cursivas* y **negritas**.
- **Listas:** Listas ordenadas con números y listas desordenadas con `-` o `*`.
- **Enlaces:** Usa `[texto](URL)` para crear enlaces.
- **Imágenes:** Similar a los enlaces pero con `!` al inicio, como `![alt text](URL de la imagen)`.
- **Código:** Utiliza `` ` `` para código en línea y triples para bloques de código.

## Comandos de Git

### Verificar el estado de un repositorio local
- `git status`

### Agregar archivos
- Individual: `git add [nombre-del-archivo]`
- Todos los archivos: `git add .`

### Agregar comentarios a la confirmación
- `git commit -m "tu mensaje"`

### Cargar cambios al repositorio remoto
- `git push`

### Manejo de ramas
- Crear una rama: `git branch [nombre-de-la-rama]`
- Cambiar a una rama: `git checkout [nombre-de-la-rama]`
- Eliminar una rama: `git branch -d [nombre-de-la-rama]`

### Revertir a una confirmación específica
- `git revert [id-de-la-confirmación]`


### Actividad 7 & Tarea 6
## Descripcion del proyecto:
Este proyecto es un sistema de gestión para una pequeña escuela de robótica, diseñado para facilitar a los profesores la organización y entrega de cursos de robótica. La plataforma permite la creación de perfiles de usuario para estudiantes, docentes y administradores, cada uno con roles y permisos distintos. Los cursos, que son el núcleo del sistema, están cuidadosamente estructurados con títulos, material didáctico asociado y se categorizan en diferentes niveles de habilidad, desde principiante hasta avanzado.

El sistema se apoya en un back-end robusto construido con Laravel 10, utilizando Eloquent ORM para la interacción con la base de datos relacional. Se ha configurado un conjunto de migraciones, modelos, seeders y factories para manejar la creación y población inicial de la base de datos con datos de prueba. Además, se implementó un sistema de autenticación para asegurar el acceso y la gestión adecuada de la información.

El desarrollo ha seguido las mejores prácticas de Laravel, incluyendo el uso de Artisan CLI para manejar migraciones y seeders, lo que garantiza una estructura de base de datos sólida y un proceso de desarrollo eficiente. Con la inclusión de factories y seeders, se ha facilitado la simulación de un entorno de producción, permitiendo pruebas exhaustivas y la demostración de funcionalidades antes de su despliegue real.

## Diagrama ER
![Imagen de Portada](./imagenes/DAW%20Act%207%20ER.png)