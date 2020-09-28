@extends('_layouts.master')
@section('body')
<div class="work">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Made by: {{ $page->author }} - last update: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts"><i class="fas fa-arrow-left"></i> All works</a>
    @if ($page->link)
      <a class="button" href="{{ $page->link }}"><i class="fas fa-link"></i> Link</a>
    @endif
  </div>
</div>
@endsection
