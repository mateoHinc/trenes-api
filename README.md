# 🚆 API Sistema de Trenes (Laravel 12) 

Este proyecto es una API RESTful para la gestión de sistema ferroviario: estaciones, rutas, horarios, tickets y reportes.

Desarrollado con **Laravel 12**, base de datos **SQLite** y documentación automático y documentación automática con **Scribe (OpenAPI)**.

---

# 📦 Tecnologías Utilizadas

- **Laravel 12** (PHP 8.2)
- **SQLite** (Base de datos local)
- **Scribe** (Documentación de API)
- **Postman** (Para pruebas manuales)
- **Swagger/OpenAPI** (Compatible vía Scribe)

## 🚀 Instalación

```bash
# Clonar el repositorio
git glone https://github.com/mateoHinc/trenes-api.git
cd api-trenes

# Instalar dependencias
composer install

# Copiar y configurar el archivo .env
cp .env.example .env
php artisan key:generate

# Crear base de datos SQLite
touch database/database.sqlite

# Actualizar el .env
DB_CONNECTION=sqlite
DB_DATABASE=${PATH}/database/database.sqlite

# Migrar las tablas
php artisan migrate

# Ejecutar el servidor
php artisan serve
```

---

# 📘 Documentación de la API

URL local: http://localhost:8000/docs

Generado automáticamente con Scribe, formato OpenAPI

```bash
php artisan scribe:generate
```

---

# 🔌 Endpoints Principales

## Usuarios

| Método | Endpoint                   | Descripción                       |
|--------|----------------------------|-----------------------------------|
| GET    | `/api/users`               | Listar usuarios                   |
| POST   | `/api/users`               | Crear usuario                     |
| PATCH  | `/api/users/{id}/deactive` | Activar/Desactivar Usuario        |
| GET    | `/api/users/{id}/tickets`  | Historial de tickets              |

## Trenes

| Método | Endpoint                   | Descripción                       |
|--------|----------------------------|-----------------------------------|
| GET    | `/api/trains`              | Listar trenes                     |
| GET    | `/api/trains/{id}/routes`  | Ver rutas del tren                |
| GET    | `/api/trains/available`    | Trenes sin rutas asignadas        |
| PATCH  | `/api/trains/{id}/deactive`| Activar/Desactivar tren           |
