<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <!-- defaults meta's -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->host }}{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#202020">
    <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#202020">
    <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#202020">

    <!-- scripts and styles -->
    <link rel="preload" href="{{ mix('css/main.css', 'assets/build') }}" as="style">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" media="print" onload="this.media='all'">
    <script async src="https://kit.fontawesome.com/7ab1523f09.js" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @if ($page->production)
    <!-- Google Analytics (Yeah I know not really for your privacy) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83869367-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-83869367-1');
    </script>
    @endif
</head>

<body>
    @include('_partials.header')
    <div class="container">
        @yield('body')
    </div>
    @include('_partials.footer')
</body>

</html>