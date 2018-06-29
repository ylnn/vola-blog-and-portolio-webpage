@extends('layouts.front')

@section('content')
    <div class="article">
            <div class="title">{{$portfolio->title}}</div>
            @if($portfolio->status == "draft")
                <div class="badge badge-warning">DRAFT</div>
            @endif
            <img src="{{Voyager::image($portfolio->image)}}" class="img-fluid" />

            <div class="summary">{!! $portfolio->body !!}</div>
        </div>
@endsection