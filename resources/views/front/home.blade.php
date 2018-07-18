@extends('layouts.front')

@section('content')

    @isset($posts)
        @foreach ($posts as $post)
            @if( ( $post->status == "PUBLISHED" ) or (auth()->check()))
            <div class="article">
                <div class="title">
                    <a class="article-link" href="{{ route('post.detail', [$post->id, $post->slug]) }}">
                        {{$post->title}}
                    </a>
                </div>
                @if($post->status == "DRAFT")
                    <div class="badge badge-2x badge-warning">DRAFT</div>
                @endif
                <div class="date">{{$post->created_at->format('l, d F Y')}}</div>
                @isset($post->image)
                    <div class="image">
                        <a class="article-link" href="{{ route('post.detail', [$post->id, $post->slug]) }}">
                            <img src="{{Voyager::image($post->thumbnail('medium'))}}" class="img-fluid" />
                        </a>
                    </div>
                @endif
                <div class="summary">
                    <a class="article-link" href="{{ route('post.detail', [$post->id, $post->slug]) }}">
                        {{ $post->excerpt}}
                    </a>
                </div>
                <div class="read-more">
                    <a href="{{ route('post.detail', [$post->id, $post->slug]) }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
            @endif
        @endforeach
    @endif
@endsection

@push('scripts')
    {!! $siteSchema->toScript() !!}
@endpush