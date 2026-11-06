# Desarrollo de la landing PGD

## Estado del proyecto

La rama `codex/e1-landing-pgd` parte del entregable **E0 — Arranque**. La pantalla actual es una comprobación técnica provisional; la propuesta visual se integrará en esta misma rama durante el entregable E1.

## Tecnologías

- Laravel 12 y Blade.
- Tailwind CSS 4.
- Alpine.js 3.
- Vite 7.

## Requisitos

- PHP 8.2 o posterior.
- Composer 2.
- Node.js 22 o posterior.
- npm 10 o posterior.

Versiones utilizadas durante el arranque:

- PHP 8.5.11.
- Composer 2.10.3.
- Node.js 26.11.1.
- npm 11.20.0.

## Organización del código

Los archivos propios de la página están reunidos en `resources/pgd/`:

- `landing.blade.php`: estructura de la página.
- `landing.css`: Tailwind y estilos propios.
- `landing.js`: entrada de JavaScript y Alpine.js.
- `bootstrap.js`: configuración HTTP utilizada por la página.

Laravel conserva en sus ubicaciones convencionales las rutas, pruebas, configuración y archivos generados. Las imágenes institucionales se agregarán en `public/images/pgd/` cuando se integre el diseño E1.

## Instalación

```bash
git clone https://github.com/vlopb/landing-pt.git
cd landing-pt
git switch codex/e1-landing-pgd
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

La página provisional incluye una interacción sencilla con Alpine.js para comprobar que Laravel, Blade, Vite, Tailwind CSS y Alpine.js siguen conectados correctamente.

## Seguridad

- No se debe subir el archivo `.env`.
- No se deben incluir credenciales, rutas internas ni datos personales reales.
- `vendor`, `node_modules` y los archivos compilados se generan localmente y no se versionan.
