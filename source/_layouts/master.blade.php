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
    @if(str_contains($page->getPath(), '/work/'))
    <base href="{{ $page->host }}/works">
    @elseif(str_contains($page->getPath(), '/post/'))
    <base href="{{ $page->host }}/posts">
    @endif

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
    <link rel="preload" href="assets/fonts/fontawesome/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>   
    <link rel="preload" href="assets/fonts/fontawesome/fa-brands-400.woff" as="font" type="font/woff" crossorigin>    
    <link rel="preload" href="assets/fonts/fontawesome/fa-brands-400.svg" as="font" type="font/svg" crossorigin>   
    <link rel="preload" href="assets/fonts/fontawesome/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>   
    <link rel="preload" href="assets/fonts/fontawesome/fa-regular-400.woff" as="font" type="font/woff" crossorigin>    
    <link rel="preload" href="assets/fonts/fontawesome/fa-regular-400.svg" as="font" type="font/svg" crossorigin>
    <link rel="preload" href="assets/fonts/fontawesome/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>   
    <link rel="preload" href="assets/fonts/fontawesome/fa-solid-900.woff" as="font" type="font/woff" crossorigin>    
    <link rel="preload" href="assets/fonts/fontawesome/fa-solid-900.svg" as="font" type="font/svg" crossorigin>
    <link rel="preload" href="assets/fonts/Montserrat-Black.woff2" as="font" type="font/woff2" crossorigin>   
    <link rel="preload" href="assets/fonts/Montserrat-Black.woff" as="font" type="font/woff" crossorigin>   
    <link rel="preload" href="assets/fonts/OpenSans-Light.woff2" as="font" type="font/woff2" crossorigin>   
    <link rel="preload" href="assets/fonts/OpenSans-Light.woff" as="font" type="font/woff" crossorigin>   
    <script defer type="text/javascript" src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <style>{{ inline(mix('css/main.css', 'assets/build')) }}</style>
</head>

<body>
    @include('_partials.header')
    <div class="container">
        <noscript>🚧 Some element of my website will not be working without javascript (Like the switch to light/dark mode, image slider and error page).
            But most of it is still readable, so enjoy! 🚧</noscript>
        @yield('body')
    </div>
    @include('_partials.footer')
</body>

</html>