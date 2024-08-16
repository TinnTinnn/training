<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="dark"
      data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/png"
        href="{{ asset('images/logos/favicon.png') }}"
    />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>

    <title>TinnTinnShop @yield('title')</title>

</head>

<body>
@yield('content')

<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/dist/simplebar.min.js')  }}"></script>
<script src="{{ asset('js/theme/app.dark.init.js') }}"></script>
<script src="{{ asset('js/theme/theme.js') }}"></script>
<script src="{{ asset('js/theme/app.min.js') }}"></script>
<script src="{{ asset('js/theme/sidebarmenu.js') }}"></script>

<!-- solar icons -->
<script src="{{ asset('vendor/iconify-icon.min.js') }}"></script>
</body>

</html>
