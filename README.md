# Gestor de ordenes

Un sistema web para gestionar pedidos desarrollado con Laravel y Bootstrap.

## Características
* CRUD completo para ordenes (Crear, Leer, Actualizar, Eliminar)
* Gestión de ordenes con relacion a los usuarios Eloquent
* Modales interactivos con Bootstrap 5
* Validaciones
* Estados de ordenes

## Tecnologías Utilizadas
* Backend: Laravel 12
* Frontend: Bootstrap 5, JavaScript 
* Base de datos: SQLite
* ORM: Eloquent
* Plantillas: Blade

## Configuración básica

Asegúrate de configurar las siguientes variables en tu archivo `.env`:

```env
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
CACHE_STORE=file
```

Guarda los cambios y inicia la aplicación si es necesario.
