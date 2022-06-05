<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Boolpress Guest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- css  --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->

    </head>
    <body>
            <div class="guest-home">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ route('admin.posts.index') }}">Home</a>

                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    {{-- <div class="content">
                        <div class="title">
                            @if (Auth::check())
                                    Benvenut* {{ucwords(Auth::user()['name'])}}
                            @endif
                        </div>
                        <div class="title m-b-md">
                            Laravel BoolPress
                        </div>

                        <div class="links">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div id="root"></div>
    <script src="{{ asset('js/front.js') }}" ></script>
    </body>
</html>
