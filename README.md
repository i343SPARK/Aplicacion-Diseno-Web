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

### Actividad 8
# Aplicación de Superhéroes

## Descripción
Esta aplicación es un sistema CRUD (Crear, Leer, Actualizar, Eliminar) que permite gestionar una lista de superhéroes. Cada superhéroe tiene un nombre real, un nombre de superhéroe, una URL a una foto y información adicional.

## Características
- Registro de superhéroes en la base de datos.
- Visualización de la lista de superhéroes registrados.
- Edición de los detalles de los superhéroes.
- Eliminación de superhéroes de la lista.

## Tecnologías Utilizadas
- Laravel 10.46.0
- PHP 8.2.12
- SQLite
- HTML, CSS, JavaScript (Frontend)

## Uso
Para acceder a la aplicación, navegar a `http://localhost:8000/superheroes`.

## Problemas Conocidos
### Pantalla en Blanco en la Vista de Edición
Durante el desarrollo, nos encontramos con un problema recurrente en el cual la vista de edición (`edit.blade.php`) resultaba en una pantalla en blanco. Se llevaron a cabo las siguientes acciones de depuración sin encontrar una solución definitiva:

- Revisión de los logs de Laravel y del servidor web.
- Asegurarse de que la configuración de `APP_DEBUG` estuviera en `true`.
- Limpieza de todas las cachés de Laravel.
- Depuración directa en el controlador y en la vista con `dd()`.
- Revisión de la estructura y sintaxis del archivo `edit.blade.php`.
- Confirmación de la existencia y correcto funcionamiento del layout base.
- Verificación de los permisos de archivos y carpetas.

El problema persistió a pesar de los pasos de depuración, y sigue pendiente de resolución. Se recomienda continuar con la revisión de la configuración del servidor y el entorno de desarrollo para posibles incompatibilidades o problemas de configuración específicos.

### Tarea 7
# Sistema de Calificaciones

## Descripción
Este proyecto es un sistema de gestión de calificaciones diseñado para que los estudiantes puedan llevar un registro de sus notas por materia y por actividades evaluables.

## Funcionalidades
- Agregar, visualizar, editar y eliminar materias.
- Dentro de cada materia, gestionar actividades evaluables como tareas, exámenes, entre otras.
- Registrar calificaciones para cada actividad, así como la fecha de la misma.

## Tecnologías
- **Backend:** Laravel 10.46.0
- **Frontend:** HTML, CSS y Blade templates.
- **Base de Datos:** MySQL

## Configuración del Proyecto

### Requisitos Previos
- PHP >= 8.0
- Composer
- MySQL

### Instalación
1. Clonar el repositorio: `git clone [url-del-repositorio]`
2. Navegar al directorio del proyecto: `cd calificaciones`
3. Instalar dependencias: `composer install`
4. Crear un archivo `.env` basado en `.env.example` y configurar las variables de entorno para la base de datos.
5. Generar la clave de la aplicación: `php artisan key:generate`
6. Ejecutar las migraciones: `php artisan migrate`
7. Iniciar el servidor: `php artisan serve`

## Uso
- Acceder a `http://localhost:8000/materias` para gestionar materias.
- Acceder a `http://localhost:8000/materias/{id}/actividades` para gestionar las actividades de una materia específica.