---
pagination:
    collection: posts
    perPage: 10
---

@extends('_layouts.master')
@section('body')

<div class="post-container">
    <ul>
        @foreach ($pagination->items as $post)
        <li class="post-block">
            {{ date('j-F-Y', $post->date) }} - <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination">
    @if ($previous = $pagination->previous)
    <a href="{{ $page->baseUrl }}{{ $pagination->first }}" aria-label="First page"><i aria-hidden="true" class="fas fa-angle-double-left"></i></a>
    <a href="{{ $page->baseUrl }}{{ $previous }}" aria-label="Page back"><i aria-hidden="true" class="fas fa-angle-left"></i></a>
    @endif

    @foreach ($pagination->pages as $pageNumber => $path)
    <a href="{{ $page->baseUrl }}{{ $path }}" class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
        {{ $pageNumber }}
    </a>
    @endforeach

    @if ($next = $pagination->next)
    <a href="{{ $page->baseUrl }}{{ $next }}" aria-label="Page forward"><i aria-hidden="true" class="fas fa-angle-right"></i></a>
    <a href="{{ $page->baseUrl }}{{ $pagination->last }}" aria-label="Last page"><i aria-hidden="true" class="fas fa-angle-double-right"></i></a>
    @endif
</div>
@endsection