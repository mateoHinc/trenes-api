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

## Rutas

| Método | Endpoint                   | Descripción                          |
|--------|----------------------------|--------------------------------------|
| GET    | `/api/routes`              | Listar rutas                         |
| POST   | `/api/routes`              | Crear ruta                           |
| DELETE | `/api/routes/{id}`         | Eliminar ruta si no tiene horarios   |

## Horarios

| Método | Endpoint                            | Descripción                 |
|--------|-------------------------------------|-----------------------------|
| GET    | `/api/schedules`                    | Listar horarios             |
| GET    | `/api/schedules/next`               | Horarios próximas 24h       |
| GET    | `/api/schedules/today`              | Horarios de hoy             |
| GET    | `/api/schedules/{id}/seat-available`| Asientos disponibles        |

## Tickets

| Método | Endpoint                        | Descripción                     |
|--------|---------------------------------|---------------------------------|
| POST   | `/api/tickets`                  | Crear ticket                    |
| POST   | `/api/tickets/{id}/cancel`      | Cancelar ticket                 |
| POST   | `/api/tickets/{id}/use`         | Marcar como usada               |
| GET    | `/api/tickets/active`           | Tickets reservados              |
| GET    | `/api/tickets/history/use/{id}` | Historial por usuario           |

## Reportes

| Método | Endpoint                   | Descripción                       |
|--------|----------------------------|-----------------------------------|
| GET    | `/reports/income`          | Ingresos estimados por tickets    |
| GET    | `/api/reports/train-usage` | % de Ocupación por tren           |

---

# ✒️ Autor

**👤 Nombre:** Mateo Hincapié Giraldo
**💼 Profesión:** Ingeniero de sistemas.
**📧 E-mail:** mateo.hincapie@hotmail.com
**📍 Lugar de Origen:** Medellín, Colombia

---

## Desarrollado como proyecto de backend PHP, Laravel 12.
