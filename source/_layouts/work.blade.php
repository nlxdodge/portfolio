@extends('_layouts.master')
@section('body')
<article class="work">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Made by: {{ $page->author }} - last update: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts" aria-label="All works"><i aria-hidden="true" class="fas fa-chevron-circle-left"></i> All works</a>
    @if ($page->link)
      <a class="button" href="{{ $page->link }}" aria-label="Link"><i aria-hidden="true" class="fas fa-link"></i> Link</a>
    @endif
  </div>
</article>
@endsection
