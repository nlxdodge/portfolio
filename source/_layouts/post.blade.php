@extends('_layouts.master')
@section('body')
<article class="post">
  <h1>{{ $page->title }}</h1>
  <p>Writen by: <span class="italic">{{ $page->author }}</span> - Last update: <span class="italic">{{ date('j-n-Y', $page->date) }}</span></p>
  @if ($page->old())
  <div class="notification-strip">🚧 This post was writen a long time ago, please check if things didn't change 🚧</div>
  @endif
  @yield('content')
  <div class="center-text margin-top-50">
    <a class="button" href="/posts" aria-label="All posts"><i aria-hidden="true" class="fas fa-chevron-circle-left"></i> All posts</a>
    @if ($page->links)
      @foreach($page->links as $link)
        <a class="button" href="{{ $link }}" target="_blank" aria-label="Link"><i aria-hidden="true" class="{{ $page->getIcon($link) }}"></i> Link</a>
      @endforeach
    @endif
  </div>
</article>
@endsection
