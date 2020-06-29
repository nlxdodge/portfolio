@extends('_layouts.master')
@section('body')

<ul>
@foreach ($posts as $post)
    <li class="post-block">
        {{ date('j-F-Y', $post->date) }} - <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    </li>
@endforeach
</ul>
@endsection
