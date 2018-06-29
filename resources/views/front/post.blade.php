@extends('layouts.front')

@section('content')
    <div class="article">
            <div class="title">{{$post->title}}</div>
            <div class="date">{{$post->created_at->format('l, d F Y')}}</div>
            @if($post->status == "draft")
                <div class="badge badge-warning">DRAFT</div>
            @endif
            <img src="{{Voyager::image($post->image)}}" class="img-fluid" />

            <div class="summary">{!! $post->body !!}</div>
        </div>
@endsection