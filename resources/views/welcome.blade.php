<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="app" class="title m-b-md">
                    @{{ message }}
                </div>

                <div id="links" class="links">

                    <a id="tarefas" href="{{ route('tarefas') }}">@{{tarefas}}</a>
                    <a id="laracasts" href="https://laracasts.com">@{{laracasts}}</a>
                    <a id="news" href="https://laravel-news.com">@{{news}}</a>
                    <a id="forge" href="https://forge.laravel.com">@{{forge}}</a>
                    <a id="github" href="https://github.com/laravel/laravel">@{{github}}</a>

                </div>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js'></script>
        <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Olá, eu sou o Lucas!',
            }
        });

        var links = new Vue({
            el: '#links',
            data: {
                tarefas: 'Tarefas',
                laracasts: 'Laracasts',
                news: 'News',
                forge: 'Forge',
                github: 'Github',
                }
            })
        </script>
    </body>
</html>
