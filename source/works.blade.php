@extends('_layouts.master')
@section('body')

<div class="work-container">
@foreach ($works as $work)
    <a class="work-block" href="{{ $work->getUrl() }}">
        <picture>
            <source srcset="{{ $work->header_image }}.webp" type="image/webp" loading="lazy">
            <img src="{{ $work->header_image }}.png" alt="{{ $work->title }}" loading="lazy" />
        </picture>
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
