@extends('_layouts.master')
@section('body')

<h1>{{ $page->title }}</h1>
<p class="italic">Made by: {{ $page->author }} - last update: {{ date('j-F-Y', $page->date) }}</p>

@yield('content')

@endsection
