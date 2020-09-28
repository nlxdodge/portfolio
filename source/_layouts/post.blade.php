@extends('_layouts.master')
@section('body')
<div class="post">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Writen by: {{ $page->author }} - Last update: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts"><i aria-hidden="true" class="fas fa-arrow-left"></i> All posts</a>
  </div>
</div>
@endsection
