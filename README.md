# T.R.A.C.K. (Tablero Reactivo de Administración y Control Kanban)

T.R.A.C.K. es un sistema de gestión de tareas diseñado para la gestión de tareas en procesos de desarrollo y gestión de software.

## Arquitectura (Monorepo)
Este proyecto utiliza una arquitectura API-Driven separada lógicamente en este monorepo:

- **Backend (`/api`):** Laravel 13 y SQLite.
- **Frontend (`/client`):** React, Vite, Tailwind CSS y Shadcn UI.

## Infraestructura y Despliegue
- API hospedada en: Render / Railway
- Cliente hospedado en: Netlify