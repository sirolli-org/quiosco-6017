# YAQ - Yet Another Quiosco

**YAQ** es un proyecto de software en el marco de las Prácticas Profesionalizantes III de la carrera Tecnicatura Superior en Análisis de Sistemas y Dessarrollo de Software en el Instituto de Enseñanza Superior Nº 6017 "_Prof. Amadeo R. Sirolli_".

El proyecto utiliza el [framework Laravel](https://laravel.com/), un conjunto de herramientas y recursos que permiten desarrollar aplicaciones web de manera rápida y sencilla en el [lenguaje de programación PHP](https://www.php.net/).

## Resumen

Se trata de una aplicación web diseñada para la gestión de los procesos típicos de un quiosco, como la administración de productos, ventas, clientes y reportes. Está pensada para ser utilizada por los propietarios o empleados de un quiosco para facilitar la gestión diaria del negocio y mejorar la eficiencia en las operaciones.

## Requisitos

- PHP 8.4.1+
- Composer 2.8.12+
- Laravel 13+
- Node.js v24+ (LTS)
- NPM v11+
- MySQL/MariaDB/SQLite
- Servidor web (Apache o Nginx)

## Instalación & Configuración

1. Clona el repositorio del proyecto:

    ```bash
        git clone https://github.com/sirolli-org/yaq.git
    ```

2. Navega al directorio del proyecto:

    ```bash
        cd quiosco-6017
    ```

3. Instala las dependencias del proyecto utilizando [Composer](https://getcomposer.org/):

    ```bash
        composer install
    ```

4. Instala las dependencias de JavaScript utilizando [npm](https://www.npmjs.com/):

    ```bash
        npm install
    ```

5. Configura el archivo `.env` con la información de tu base de datos y otras configuraciones necesarias:

    ```bash
        cp .env.example .env
    ```

6. Corre las migraciones para crear las tablas en la base de datos:

    ```bash
        php artisan migrate
    ```

7. Genera la clave de la aplicación:

    ```bash
        php artisan key:generate
    ```

## Desarrollo

Puede iniciar el servidor de desarrollo de Laravel ejecutando el siguiente comando:

```bash
    composer run dev
```

Luego acceda a `http://localhost:8000` en su navegador para ver la aplicación en acción.

## Producción

Prepare para el despliegue en producción ejecutando el siguiente comando:

```bash
    npm run build
```

Por último, se tiene que configurar un servidor web (Apache o Nginx) para servir los archivos, asegurándose de apuntar al directorio `public`.

## Equipo

ToDo.
