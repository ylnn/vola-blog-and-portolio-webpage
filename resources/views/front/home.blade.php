@extends('layouts.front')

@section('content')

    @isset($posts)
        @foreach ($posts as $p)
            @if( ( $p->status == "PUBLISHED" ) or (auth()->check()))
            <div class="article">
                <div class="title">
                    <a class="article-link" href="{{ route('post.detail', [$p->id, $p->slug]) }}">
                        {{$p->title}}
                    </a>
                </div>
                @if($p->status == "DRAFT")
                    <div class="badge badge-2x badge-warning">DRAFT</div>
                @endif
                <div class="date">{{$p->created_at->format('l, d F Y')}}</div>
                @isset($p->image)
                    <div class="image">
                        <a class="article-link" href="{{ route('post.detail', [$p->id, $p->slug]) }}">
                            <img src="{{Voyager::image($p->image)}}" class="img-fluid" />
                        </a>
                    </div>
                @endif
                <div class="summary">
                    <a class="article-link" href="{{ route('post.detail', [$p->id, $p->slug]) }}">
                        {{ $p->excerpt}}
                    </a>
                </div>
                <div class="read-more">
                    <a href="{{ route('post.detail', [$p->id, $p->slug]) }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
            @endif
        @endforeach
    @endif
@endsection

@push('scripts')
    {!! $siteSchema->toScript() !!}
@endpush