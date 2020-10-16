@extends('_layouts.master')
@section('body')
<article class="post">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Writen by: {{ $page->author }} - Last update: {{ date('j-F-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts" aria-label="All posts"><i aria-hidden="true" class="fas fa-chevron-circle-left"></i> All posts</a>
    @if ($page->link)
      <a class="button" href="{{ $page->link }}" aria-label="Link"><i aria-hidden="true" class="fas fa-link"></i> Link</a>
    @endif
  </div>
</article>
@endsection
