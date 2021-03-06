<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="@yield('description', 'Maseno Hub')" />
    <meta name="keywords" content="maseno hub">
    <meta name="author" content="Maseno Hub">
    <meta name="designer" content="Maseno Hub">
    <meta name="publisher" content="Maseno Hub">

    <!-- Facebook Meta Tags -->
    <meta property="og:site_name" content="{{ config('app.name', 'Maseno Hub') }}">
    <meta property="og:url" content="@yield('url', 'https://masenohub.herokuapp.com')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description', 'Maseno Hub')" />
    <meta property="og:image" content="https://masenohub.herokuapp.com/logo.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="masenohub.herokuapp.com" />
    <meta name="twitter:url" content="@yield('url', 'https://masenohub.herokuapp.com')" />
    <meta name="twitter:title" content="{{ config('app.name', 'Maseno Hub') }}" />
    <meta name="twitter:description" content="@yield('description', 'Maseno Hub')" />
    <meta name="twitter:image" content="https://masenohub.herokuapp.com/logo.png" />
    <meta name="twitter:image_alt" content="{{ config('app.name', 'Maseno Hub') }}" />
    <meta name="twitter:site" content="masenohub" />
    <meta name="twitter:creator" content="masenohub" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @include('cookieConsent::index')
</body>

</html>