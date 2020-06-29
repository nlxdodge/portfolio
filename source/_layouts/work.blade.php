@extends('_layouts.navigation')

<h1>{{ $page->title }}</h1>
<p>Made by: {{ $page->author }} - last update: {{ date('F j, Y', $page->date) }}</p>

@yield('content')
