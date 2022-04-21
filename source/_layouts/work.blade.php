@extends('_layouts.master')
@section('body')
<article class="work">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Made by: {{ $page->author }} - last update: {{ date('j F Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/works" aria-label="All works"><i aria-hidden="true" class="fas fa-chevron-circle-left"></i> All works</a>
    @if ($page->link)
      <a class="button" href="{{ $page->link }}" target="_blank" aria-label="Link"><i aria-hidden="true" class="fas fa-link"></i> Link</a>
    @endif
    @if ($page->code)
      <a class="button" href="{{ $page->code }}" target="_blank" aria-label="Code"><i aria-hidden="true" class="fas fa-code"></i> Code</a>
    @endif
  </div>
</article>
@endsection
