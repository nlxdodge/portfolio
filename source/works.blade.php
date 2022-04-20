@extends('_layouts.master')
@section('body')

<div class="work-container">
@foreach ($works as $work)
    <a class="work-block" href="{{ $work->getUrl() }}">
        <img src="{{ $work->header_image }}" alt="{{ $work->title }}" loading="lazy" />
        <div class="work-title">
            {{ $work->title }}
            @if ($work->category)
                <span class="sub">({{ $work->category }})</span>
            @endif
        </div>
    </a>
@endforeach
</div>
@endsection
