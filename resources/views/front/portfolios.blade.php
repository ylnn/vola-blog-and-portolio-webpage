@extends('layouts.front')

@section('content')
    @forelse ($portfolios as $portfolio)
        <div class="article">
            <div class="title">
                <a class="article-link" href="{{ route('portfolio.detail', [$portfolio->id, $portfolio->slug]) }}">
                    {{$portfolio->title}}
                </a>
            </div>
            @if($portfolio->status == "draft")
                <div class="badge badge-warning">DRAFT</div>
            @endif
            @isset($portfolio->image)
                <div class="image">
                    <a class="article-link" href="{{ route('portfolio.detail', [$portfolio->id, $portfolio->slug]) }}">
                        <img src="{{Voyager::image($portfolio->thumbnail('medium'))}}" class="img-fluid" />
                    </a>
                </div>
            @endif
            <div class="summary">
                <a class="article-link" href="{{ route('portfolio.detail', [$portfolio->id, $portfolio->slug]) }}">
                    {{ $portfolio->excerpt}}
                </a>
            </div>
            <div class="read-more">
                <a href="{{ route('portfolio.detail', [$portfolio->id, $portfolio->slug]) }}" class="btn btn-dark">Detail</a>
            </div>
        </div>
    @empty
        <p>Not Found.</p>
    @endforelse
@endsection