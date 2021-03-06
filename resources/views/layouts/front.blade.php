<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    @if(null !== setting('site.front-style'))
        <link rel="stylesheet" href="{{asset('css/'. setting('site.front-style'))}}">
    @else
        <link rel="stylesheet" href="{{asset('css/front.css')}}">
    @endif
    <link rel="shortcut icon" type="image/png" href="{{asset('storage/'. setting('admin.icon_image'))}}"/>
    @if(isset($title))
        <title>{{$title}} | {{setting('site.title')}}</title>
    @elseif(isset($post))
        <title>{{$post->title}} | {{setting('site.title')}}</title>
    @else
        <title>{{setting('site.title') ?? ''}}</title>
    @endif
    <meta name="description" content="{{setting('site.general_seo_desc')}}">
    <meta name="keywords" content="{{setting('site.general_seo_keywords')}}">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">

            
        <div class="header">
            <div class="row d-flex justify-content-between">
                <div class="col-5">
                    <div class="header-left"><a href="{{ route('main') }}">{{setting('site.site-brand') ?? ''}}</a>
                        <p class="laravel-developer-header"><a href="{{ route('main') }}">{{setting('site.description') ?? ''}}</a></p>
                        <div style="font-size:15px;">
                            @forelse($skills as $skill)
                                <span class="badge badge-secondary">{{$skill->skill}}</span> 
                            @empty
                                &nbsp;
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="header-right">
                        @php 
                            $email    = setting('site.email') ?? '';
                            $facebook = setting('site.facebook') ?? '';
                            $dribbble = setting('site.dribbble') ?? '';
                            $behance  = setting('site.behance') ?? '';
                            $linkedin = setting('site.linkedin') ?? '';
                            $twitter  = setting('site.twitter') ?? '';
                            $github   = setting('site.github') ?? '';
                        @endphp
                        @if(!empty($email))
                            <a href="{{$email}}">
                                    <img width="30" src="/images/mail.svg" alt="Mail">
                            </a>
                        @endif
                        @if(!empty($facebook))
                            <a href="{{$facebook}}">
                                    <img width="30" src="/images/facebook.svg" alt="Facebook">
                            </a>
                        @endif
                        @if(!empty($github))
                            <a href="{{$github}}">
                                    <img width="30" src="/images/github.svg" alt="Github">
                            </a>
                        @endif
                        @if(!empty($behance))
                            <a href="{{$behance}}">
                                <img width="30" src="/images/behance.svg" alt="Behance">
                            </a>
                        @endif
                        @if(!empty($dribbble))
                            <a href="{{$dribbble}}">
                                <img width="30" src="/images/dribbble.svg" alt="Dribbble">
                            </a>
                        @endif
                        @if(!empty($linkedin))
                            <a href="{{$linkedin}}">
                                <img width="30" src="/images/linkedin.svg" alt="Linkedin">
                            </a>
                        @endif
                        @if(!empty($twitter))
                            <a href="{{$twitter}}">
                                <img width="30" src="/images/twitter.svg" alt="Twitter">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            @if(setting('site.show-top-menu'))
            <div class="row">
                <div class="col d-flex">
                    <a href="{{route('main')}}" class="menu-link-item @if(Route::currentRouteName() == 'main') font-weight-bold @endif"   style="margin-right:10px">Hakkımda</a>
                    <a href="{{route('blog')}}" class="menu-link-item @if(Route::currentRouteName() == 'blog') font-weight-bold @endif"  style="margin-right:10px">Blog</a>
                </div>
            </div>
            @endif
            
            @yield('content')
        </div>

        <div class="footer d-flex justify-content-center">
            <div>{{ setting('site.footer') ?? ''}}</div>
        </div>

    </div>
</div>
    </div>
    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    @include('parts.analytics')

    @stack('scripts') 
    
</body>
</html>