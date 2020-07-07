@extends('_layouts.master')
@section('body')
<div class="post">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Made by: {{ $page->author }} - last updated: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="btn" href="/posts">All posts</a>
  </div>
</div>
@endsection
