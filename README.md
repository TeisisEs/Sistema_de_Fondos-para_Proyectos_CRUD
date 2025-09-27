<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema_de_Fondos-para_Proyectos_CRUD

**Descripción:**  
CRUD para gestionar proyectos y la fuente de sus fondos (préstamo, banco, hipoteca, institución) y sus montos: planificado, patrocinado y propios.

---

## Demo

Puedes ver la demostración del CRUD aquí:  
[https://www.youtube.com/watch?v=urVMyyILvcM](https://www.youtube.com/watch?v=urVMyyILvcM)

---

## Tecnologías y versiones utilizadas

- Laravel Framework 12.31.1  
- PHP 8.4.10  
- Composer 2.8.10  
- Node.js v22.17.0  
- Git 2.50.1  
- MySQL Server 9.3.0  

---

## Funcionalidades principales

- Registro, actualización, eliminación y visualización de proyectos.  
- Cada proyecto contiene:  
  - Fuente de fondos (préstamo, banco, hipoteca, institución)  
  - Monto planificado  
  - Monto patrocinado  
  - Monto de fondos propios  
- Generación de informes PDF con el siguiente formato:
---  
Gobierno de El Salvador
Fecha: [fecha actual]
Id | NombreProyecto | FuenteFondos | MontoPlanificado | MontoPatrocinado | MontoFondosPropios
---

## Instalación

1. Clonar el repositorio  
```bash
git clone <https://github.com/TeisisEs/Sistema_de_Fondos-para_Proyectos_CRUD.git>


2. Entrar al directorio del proyecto
cd Sistema_de_Fondos-para_Proyectos_CRUD o tambien utilizar cd prototipo-laravel


3. Instalar dependencias PHP con Composer
```bash
composer install


4. Instalar dependencias de Node.js (opcional, si usas assets)

```bash

npm install


5. Configurar el archivo .env.example con datos de conexión a base de datos

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_basedatos
DB_USERNAME=usuario
DB_PASSWORD=contraseña

6. Ejecutar migraciones y seeders

```bash
php artisan migrate --seed

7. Ejecutar servidor local

```bash
php artisan serve

---
##Uso

Accede a la URL del servidor local (por defecto http://127.0.0.1:8000
)

Gestiona los proyectos desde la interfaz CRUD: crear, editar, eliminar y ver listado

Genera informes PDF con la información de los proyectos y sus fondos













