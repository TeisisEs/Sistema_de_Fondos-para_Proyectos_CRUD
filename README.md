<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
</p>

# Sistema de Fondos para Proyectos (CRUD)

## Descripción

Aplicación CRUD para la gestión de proyectos y sus fuentes de financiamiento, permitiendo el control de los siguientes tipos de fondos:

- Préstamos  
- Bancos  
- Hipotecas  
- Instituciones
- Fuentes personalizadas (definidas dinámicamente por el usuario)  

Cada proyecto registra tres tipos de montos:

- **Monto planificado**  
- **Monto patrocinado**  
- **Monto de fondos propios**  

---

## Demostración

Puedes ver la demostración del CRUD aquí:  
[https://www.youtube.com/watch?v=urVMyyILvcM](https://www.youtube.com/watch?v=urVMyyILvcM)

---

## Tecnologías utilizadas

| Tecnología  | Versión      |
|-------------|--------------|
| Laravel     | 12.31.1      |
| PHP         | 8.4.10       |
| Composer    | 2.8.10       |
| Node.js     | v22.17.0     |
| Git         | 2.50.1       |
| MySQL       | 9.3.0        |


---

## Funcionalidades principales

- Crear, leer, actualizar y eliminar proyectos.
- Cada proyecto puede contener:
  - Fuente de fondos (préstamo, banco, hipoteca, institución)
  - Monto planificado
  - Monto patrocinado
  - Monto de fondos propios
- Generación de informes en PDF con formato:

### Formato del PDF
  
Gobierno de El Salvador

Fecha: [fecha actual]

Id | NombreProyecto | FuenteFondos | MontoPlanificado | MontoPatrocinado | MontoFondosPropios | Acciones

---

## Instalación

1. Clonar el repositorio  
```bash
git clone <https://github.com/TeisisEs/Sistema_de_Fondos_para_Proyectos_CRUD.git>
```


2. Entrar al directorio del proyecto
```bash
cd Sistema_de_Fondos-para_Proyectos_CRUD
```
 o tambien utilizar
 
```bash
cd prototipo-laravel
```


3. Instalar dependencias PHP con Composer
```bash
composer install
```

4. Instalar dependencias de Node.js (opcional, si usas assets)

```bash
npm install
```

5. Configurar el archivo .env.example con datos de conexión a base de datos

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_basedatos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

6. Ejecutar migraciones y seeders

```bash
php artisan migrate --seed
```

7. Ejecutar servidor local

```bash
php artisan serve
```
---
## Uso

- Accede a la URL del servidor local (por defecto http://127.0.0.1:8000)

- Gestiona los proyectos desde la interfaz CRUD: crear, editar, eliminar y ver listado

- Genera informes PDF con la información de los proyectos y sus fondos

---

## Licencia

Este proyecto está bajo la licencia MIT.
Puedes ver el archivo LICENSE para más detalles












