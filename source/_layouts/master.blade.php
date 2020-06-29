<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <!-- defaults meta's -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#191919">
        <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#191919">

        <!-- custom plugins -->
        <script type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>
        <div class="container">
            @include('_partials.header')
            @yield('body')
            @include('_partials.footer')
        </div>
    </body>
</html>
