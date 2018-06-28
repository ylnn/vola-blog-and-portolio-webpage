@extends('layouts.front')

@section('content')

    @isset($posts)
        @foreach ($posts as $post)
            <div class="post">
                <div class="title">{{$post->title}}</div>
                @if($post->status == "draft")
                    <div class="badge badge-warning">DRAFT</div>
                @endif
                <div class="date">{{$post->created_at->format('l, d F Y')}}</div>
                @isset($post->image)
                    <div class="image">
                        <img src="{{Voyager::image($post->thumbnail('medium'))}}" class="img-fluid" />
                    </div>
                @endif
                <div class="summary">{{ $post->excerpt}}</div>
                <div class="read-more">
                    <a href="{{ route('post.detail', [$post->id, $post->slug]) }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        @endforeach
    @endif
@endsection