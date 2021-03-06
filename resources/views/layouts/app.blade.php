<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="container -sm row d-flex justify-content-center">

                    <div class ="column" >

                    <x-jet-responsive-nav-link  >
                    <div class="jumbotron">
                    <h1 class="display-4">Banco de Preguntas</h1>
                    <p class="lead">En esta seccion el docente podra asignar preguntas respecto al examen.</p>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg" href="{{ route('profesor.banco') }}" role="button">Banco de preguntas</a>
                    </div>
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link  >
                    <div class="jumbotron">
                    <h1 class="display-4">Realizar Examen</h1>
                    <p class="lead">En esta seccion el Alumno podra tomar un examen de tres temas ya seleccionados.</p>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg" href="/examen_literatura" role="button">Realizar Examen</a>
                    </div>
                    </x-jet-responsive-nav-link>
                   
                     


                     <x-jet-responsive-nav-link >
                     <div class="jumbotron">
                    <h1 class="display-4">Calificaciones</h1>
                    <p class="lead">En esta seccion el Alumno y docente podra ver las calificaciones de los examenes ya tomados.</p>
                    <hr class="my-4">
                    <a class="btn btn-primary btn-lg"  href="/resumen" role="button">Calificaciones</a>
                    </div>
                    </x-jet-responsive-nav-link>

                    </div>
                </div>
            </main> 
        </div>
        @stack('modals')

        @livewireScripts

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
