@extends('_layouts.master')
@section('body')

<ul>
@foreach ($works as $work)
    <a href="{{ $work->getUrl() }}">
    <div class="work-block">
        <div class="work-title">{{ $work->title }}</div>
    </div>
    </a>
@endforeach
</ul>
@endsection
