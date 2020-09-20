<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '') - {{ config('app.name') }}</title>
    <meta name="description" content="@yield('description', 'Get real-time monitoring for your temperature sensitive products.')">
    <meta name="author" content="{{ config('app.name') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet' type='text/css'>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <main id="app" role="main" v-cloak>
        <div class="d-flex position-relative min-height-100vh--lg">

            <header class="position-absolute-top-0 z-index-2">
                <nav class="d-flex justify-content-between align-items-center">
                    <div class="col-lg-5 col-xl-4 text-lg-center px-0">
                        <a class="d-inline-block p-3 p-sm-5" href="{{ url('/') }}" aria-label="Logo">
                            <img src="{{ asset('images/logo-circle.png') }}" alt="Logo">
                        </a>
                    </div>
                </nav>
            </header>




            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 u-space-2">
                        @yield('content', '')
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    @yield('scripts', '')
</body>
</html>
