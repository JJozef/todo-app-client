<h1 style="text-align:center;">ToDo Application<h1>

# Requisitos previos para la instalación

-   PHP versión 8.1 o superior
-   XAMPP
-   Composer

# Instrucciones de instalación

-   Descarga o clona el repositorio de ToDo Application.
-   Configura XAMPP en tu equipo.
-   Copia el contenido del repositorio en la carpeta htdocs de XAMPP.
-   Inicia el servicio Apache y MySQL en XAMPP.
-   Ejecuta composer i y npm i para instalar las dependencias.
-   Cree una base de datos en xampp, el nombre de su db debe agregarse al .env en "DB_DATABASE=".
-   Copia .env.example a .env y configura la conexión a la base de datos.
-   Ejecute "php artisan key:generate" para generar una nueva clave de aplicación.
-   Ejecuta php artisan migrate para crear las tablas necesarias.
-   Ejecuta npm run build.
-   Ejecuta php artisan serve para iniciar el servidor de desarrollo.
-   Accede a http://127.0.0.1:8000 para ver la aplicación, segun 'php artisan serve' te diga.
-   Creas una cuenta.
    [¡Ya puedes comenzar a utilizar ToDo Application!]
