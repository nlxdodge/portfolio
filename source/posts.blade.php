@extends('_layouts.master')
@section('body')

<ul>
@foreach ($posts as $post)
    <a href="{{ $post->getUrl() }}">
    <div class="post-block">
        <div class="post-title">{{ $post->title }}</div>
    </div>
    </a>
@endforeach
</ul>
@endsection
