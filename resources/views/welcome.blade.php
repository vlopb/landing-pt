<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma de Gestión Digital</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
        <main class="mx-auto flex min-h-screen max-w-5xl items-center px-6 py-16 sm:px-10">
            <section class="w-full rounded-3xl border border-slate-800 bg-slate-900/80 p-8 shadow-2xl shadow-slate-950/40 sm:p-12">
                <p class="text-sm font-semibold tracking-[0.2em] text-sky-300 uppercase">Entregable E0 · Arranque</p>

                <h1 class="mt-4 max-w-3xl text-4xl font-bold tracking-tight text-white sm:text-6xl">
                    Plataforma de Gestión Digital
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                    La base técnica del proyecto está funcionando. Esta pantalla es provisional y será reemplazada después de aprobar la propuesta visual E1.
                </p>

                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <article class="rounded-2xl border border-slate-700 bg-slate-800/70 p-5">
                        <p class="text-sm text-slate-400">Framework</p>
                        <p class="mt-2 text-xl font-semibold">Laravel {{ app()->version() }}</p>
                    </article>

                    <article class="rounded-2xl border border-slate-700 bg-slate-800/70 p-5">
                        <p class="text-sm text-slate-400">Estilos</p>
                        <p class="mt-2 text-xl font-semibold">Tailwind CSS</p>
                    </article>

                    <article class="rounded-2xl border border-slate-700 bg-slate-800/70 p-5">
                        <p class="text-sm text-slate-400">Interactividad</p>
                        <p class="mt-2 text-xl font-semibold">Alpine.js</p>
                    </article>
                </div>

                <div class="mt-8" x-data="{ abierto: false }">
                    <button
                        type="button"
                        class="inline-flex min-h-11 items-center justify-center rounded-xl bg-sky-400 px-5 py-3 font-semibold text-slate-950 transition hover:bg-sky-300 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-sky-300"
                        x-on:click="abierto = !abierto"
                        x-bind:aria-expanded="abierto"
                        aria-controls="estado-e0"
                    >
                        Ver estado técnico
                    </button>

                    <div
                        id="estado-e0"
                        class="mt-5 rounded-2xl border border-emerald-700/60 bg-emerald-950/40 p-5 text-emerald-100"
                        x-cloak
                        x-show="abierto"
                        x-transition
                    >
                        <p class="font-semibold">Vite, Tailwind y Alpine están conectados correctamente.</p>
                        <p class="mt-2 text-sm text-emerald-200">La identidad visual y los componentes definitivos pertenecen a los siguientes entregables.</p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
