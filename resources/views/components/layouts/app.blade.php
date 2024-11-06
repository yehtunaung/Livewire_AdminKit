<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('assets/images/RonaldCodesLogo.png') }}" />

    <link href="{{ asset('theme/plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/css/app.css') }}" rel="stylesheet" />


    {{-- <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <div class="wrapper">
        <livewire:navigation.side-navigation />

        <div class="main">
            <livewire:navigation.top-navigation />

            <main class="content my-container" style="position: relative; border: 1px solid #ddd; padding: 20px;">
                {{ $slot }}
            </main>

            <livewire:navigation.footer-navigation />
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('theme/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    @'livewireScripts'

</body>

</html>
