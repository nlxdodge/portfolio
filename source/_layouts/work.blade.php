@extends('_layouts.master')
@section('body')
<article class="work">
  <h1>{{ $page->title }}</h1>
  <p class="italic">Made by: {{ $page->author }} - last update: {{ date('j-n-Y', $page->date) }}</p>
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/works" aria-label="All works"><i aria-hidden="true" class="fas fa-chevron-circle-left"></i> All works</a>
    @if ($page->links)
      @foreach($page->links as $link)
        <a class="button" href="{{ $link }}" target="_blank" aria-label="Link"><i aria-hidden="true" class="{{ $page->getIcon($link) }}"></i> Link</a>
      @endforeach
    @endif
  </div>
</article>
@endsection
