@extends('_layouts.master')
@section('body')
<article class="post">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Writen by: {{ $page->author }} - Last update: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts"><i aria-hidden="true" aria-label="All posts" class="fas fa-chevron-circle-left"></i> All posts</a>
  </div>
</article>
@endsection
