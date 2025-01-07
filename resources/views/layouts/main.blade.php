<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Start your development with CodeWithMangesh." />
    <meta name="author" content="CodeWithMangesh" />

    <!-- =============== Remixicon =============== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- =============== StyleSheet =============== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <title>Soteria Pharmaceuticals</title>
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="ri-whatsapp-line me-2"></i> Get in touch
        </a>
    @include('includes.header')

    <div class="pt-5">
        @yield('content')
    </div>

    @include('includes.footer')

    <!-- =============== Main =============== -->
    <main class="main"></main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    @stack('scripts')
    <script>
        $(document).ready(function($) {
            $('.count-number').counterUp({
                delay: 10,
                time: 10000
            });
        });
    </script>
</body>

</html>
