@extends('layouts.front')

@section('content')
    <div class="home-content pt-4">
        <img src="{{Voyager::image(setting('site.about-me-image'))}}" class="img-fluid" alt="">
        <p>
            {!! setting('site.about-me-content') ?? '' !!}
        </p>
    </div>
    
@endsection
