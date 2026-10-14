<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma de Gestión Digital</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white text-slate-900 antialiased">
        <main class="mx-auto max-w-3xl px-6 py-12 sm:py-16">
            <header class="border-b border-slate-300 pb-6">
                <p class="text-sm font-semibold uppercase">Página de prueba · Entregable E0</p>

                <h1 class="mt-2 text-3xl font-bold sm:text-4xl">
                    Plataforma de Gestión Digital
                </h1>

                <p class="mt-4 leading-7 text-slate-700">
                    Esta pantalla solo comprueba que la base técnica del proyecto funciona. No representa una propuesta de diseño para la landing page.
                </p>
            </header>

            <section class="mt-8 border border-slate-300 p-6" aria-labelledby="estado-herramientas">
                <h2 id="estado-herramientas" class="text-xl font-semibold">Estado de las herramientas</h2>

                <dl class="mt-5 divide-y divide-slate-200 border-y border-slate-200">
                    <div class="grid gap-1 py-3 sm:grid-cols-2">
                        <dt>Framework</dt>
                        <dd class="font-mono text-sm">Laravel {{ app()->version() }}</dd>
                    </div>

                    <div class="grid gap-1 py-3 sm:grid-cols-2">
                        <dt>Estilos</dt>
                        <dd class="font-mono text-sm">Tailwind CSS</dd>
                    </div>

                    <div class="grid gap-1 py-3 sm:grid-cols-2">
                        <dt>Interactividad</dt>
                        <dd class="font-mono text-sm">Alpine.js</dd>
                    </div>
                </dl>
            </section>

            <section class="mt-8 border border-slate-300 p-6" x-data="{ abierto: false }" aria-labelledby="prueba-interactividad">
                <h2 id="prueba-interactividad" class="text-xl font-semibold">Prueba de interactividad</h2>
                <p class="mt-2 text-slate-700">El botón muestra u oculta un mensaje para verificar Alpine.js.</p>

                <button
                    type="button"
                    class="mt-4 min-h-11 border border-slate-900 bg-white px-4 py-2 font-semibold text-slate-900 hover:bg-slate-100 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-slate-900"
                    x-on:click="abierto = !abierto"
                    x-bind:aria-expanded="abierto"
                    aria-controls="estado-e0"
                >
                    Ejecutar prueba de Alpine.js
                </button>

                <div
                    id="estado-e0"
                    class="mt-4 border border-slate-300 bg-slate-50 p-4 text-sm"
                    x-cloak
                    x-show="abierto"
                >
                    <p><strong>Prueba correcta.</strong> Vite, Tailwind y Alpine están conectados.</p>
                </div>
            </section>

            <footer class="mt-8 text-sm text-slate-600">
                Pantalla provisional sin identidad visual definitiva.
            </footer>
        </main>
    </body>
</html>
