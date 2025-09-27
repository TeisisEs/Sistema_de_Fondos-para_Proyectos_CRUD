<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto CRUD en Laravel: Gestión de Proyectos 

## Descripción

Este proyecto implementa una aplicación web para la gestión de proyectos utilizando el framework Laravel 12 y MySQL como motor de base de datos. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre una tabla de proyectos, así como generar un informe en formato PDF con los datos de los proyectos registrados.

## Requisitos

- PHP 8.1 o superior
- Composer
- MySQL 5.7 o superior
- Laravel 9.x
- Librería para generación de PDFs (por ejemplo, `dompdf/dompdf`)
- Node.js y npm (si deseas compilar assets de frontend)

## Instalación

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/tu_usuario/proyecto-laravel-crud.git
   cd proyecto-laravel-crud
Instalar las dependencias de PHP:

bash
Copiar código
composer install

3. Configurar el archivo .env:

Copia el archivo .env.example a .env y configura los parámetros de la base de datos:

bash
Copiar código
cp .env.example .env


Edita el archivo .env y ajusta las siguientes líneas:

env
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña


4. Generar la clave de la aplicación:

bash
Copiar código
php artisan key:generate

5. Ejecutar las migraciones para crear la tabla proyectos:

bash
Copiar código
php artisan migrate

6. Instalar las dependencias de frontend (si es necesario):

bash
Copiar código
npm install
npm run dev

## Estructura del Proyecto
app/
├── Models/Proyecto.php
└── Http/Controllers/ProyectoController.php

resources/views/proyectos/
├── index.blade.php
├── create.blade.php
├── edit.blade.php
└── pdf.blade.php

routes/web.php

## Funcionalidades

CRUD de Proyectos: Crear, leer, actualizar y eliminar proyectos con los siguientes campos:

id: Identificador único del proyecto.

nombre_proyecto: Nombre del proyecto.

fuente_fondos: Fuente de los fondos.

monto_planificado: Monto total planificado.

monto_patrocinado: Monto patrocinado.

monto_fondos_propios: Monto de fondos propios.

## Generación de Informe en PDF: 

Generar un informe en formato PDF con los datos de todos los proyectos registrados, siguiendo el formato :

Gobierno de El Salvador
Nombre de su institución
Fecha

Id | NombreProyecto | FuenteFondos | MontoPlanificado | MontoPatrocinado | MontoFondosPropios

## Uso
1. Iniciar el servidor de desarrollo:

bash
Copiar código
php artisan serve

2. Acceder a la aplicación en tu navegador:

arduino
Copiar código
http://localhost:8000

3. Navegar a la sección de proyectos para gestionar los registros y generar el informe en PDF.

## Video de demostración
## https://www.youtube.com/watch?v=urVMyyILvcM

## Contribuciones
Las contribuciones son bienvenidas. Si deseas mejorar este proyecto, por favor sigue estos pasos:

1. Realiza un fork del repositorio.

2. Crea una rama para tu funcionalidad (git checkout -b feature/nueva-funcionalidad).

3. Realiza tus cambios y haz commit (git commit -am 'Añadir nueva funcionalidad').

4. Haz push a la rama (git push origin feature/nueva-funcionalidad).

5. Abre un Pull Request.

## Licencia
Este proyecto está licenciado bajo la Licencia MIT - ver el archivo LICENSE para más detalles.


