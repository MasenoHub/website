<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Maseno Hub') }}</title>

    <meta name="description" content="@yield('description', 'Maseno Hub')" />
    <meta name="keywords" content="maseno hub">
    <meta name="author" content="@yield('author', 'Maseno Hub')">
    <meta name="designer" content="Maseno Hub">
    <meta name="publisher" content="Maseno Hub">

    @section('meta:og')
    <!-- Facebook Meta Tags -->
    <meta property="og:site_name" content="{{ config('app.name', 'Maseno Hub') }}">
    <meta property="og:url" content="@yield('url', 'https://masenohub.herokuapp.com')" />
    <meta property="og:type" content="@yield('og:type', 'website')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description', 'Maseno Hub')" />
    <meta property="og:image" content="https://masenohub.herokuapp.com/logo.png" />
    @show

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="masenohub.herokuapp.com" />
    <meta name="twitter:url" content="@yield('url', 'https://masenohub.herokuapp.com'))" />
    <meta name="twitter:title" content="{{ config('app.name', 'Maseno Hub') }}" />
    <meta name="twitter:description" content="@yield('description', 'Maseno Hub')" />
    <meta name="twitter:image" content="https://masenohub.herokuapp.com/logo.png" />
    <meta name="twitter:image_alt" content="{{ config('app.name', 'Maseno Hub') }}" />
    <meta name="twitter:site" content="masenohub" />
    <meta name="twitter:creator" content="@yield('twitter:creator', 'masenohub')" />

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
    <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}">

    @livewireStyles

    @stack('styles')

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
            {{ $slot }}
        </main>
    </div>


    <footer class="p-6 text-center text-gray-500 font-light">&copy;{{ date('Y') }} Maseno Hub</footer>

    @include('cookieConsent::index')

    @stack('modals')

    @livewireScripts

    @stack('scripts')
</body>

</html>