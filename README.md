# Landing de la Plataforma de Gestión Digital

Frontend de la página de inicio autenticada de la Plataforma de Gestión Digital (PGD) de la Secretaría de Seguridad Pública Municipal de Ciudad Juárez.

Este repositorio se encuentra en el entregable **E0 — Arranque**. La pantalla actual es una comprobación técnica provisional; no representa la identidad visual final.

## Tecnologías

- Laravel 12 y Blade
- Tailwind CSS 4
- Alpine.js 3
- Vite 7

## Requisitos

- PHP 8.2 o posterior
- Composer 2
- Node.js 22 o posterior
- npm 10 o posterior

Versiones utilizadas durante el arranque:

- PHP 8.5.11
- Composer 2.10.3
- Node.js 26.11.1
- npm 11.20.0

## Instalación

```bash
git clone https://github.com/vlopb/landing-pt.git
cd landing-pt
composer install
cp .env.example .env
php artisan key:generate
npm install
```

## Ejecución local

Laravel y Vite se ejecutan en terminales separadas:

```bash
php artisan serve
```

```bash
npm run dev
```

Después, abre la dirección que muestre Laravel, normalmente `http://127.0.0.1:8000`.

## Verificación

```bash
php artisan test
npm run build
```

La página provisional incluye una interacción sencilla con Alpine.js para comprobar que Laravel, Blade, Vite, Tailwind CSS y Alpine.js están conectados correctamente.

## Alcance actual

El entregable E0 incluye:

- Proyecto limpio en Laravel 12.
- Vite, Tailwind CSS y Alpine.js configurados.
- Página técnica provisional.
- Instrucciones iniciales de instalación y ejecución.

La identidad visual, las tarjetas de módulos y los demás componentes funcionales se desarrollarán después de aprobar el entregable E1.

## Seguridad

- No se debe subir el archivo `.env`.
- No se deben incluir credenciales, rutas internas ni datos personales reales.
- `vendor`, `node_modules` y los archivos compilados se generan localmente y no se versionan.
