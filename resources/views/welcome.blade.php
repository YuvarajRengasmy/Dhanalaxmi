<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body, html {
                height: 100%;
                font-family: 'Nunito', sans-serif;
                background: linear-gradient(135deg, #f0f4f8, #d9e2ec, #9fb3c8);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                text-align: center;
                background: #fff;
                padding: 50px;
                border-radius: 15px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                max-width: 1200px;
                width: 90%;
                animation: fadeIn 1.5s ease-in-out;
            }

            .title {
                font-size: 96px;
                color: #3490dc;
                font-weight: 700;
                letter-spacing: -1px;
                margin-bottom: 20px;
            }

            .links {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
                margin-top: 30px;
            }

            .links a {
                color: #3490dc;
                font-size: 18px;
                font-weight: 600;
                padding: 10px 20px;
                border-radius: 8px;
                background: #eaf4fc;
                text-decoration: none;
                transition: transform 0.3s ease, background 0.3s ease;
            }

            .links a:hover {
                background: #3490dc;
                color: #fff;
                transform: translateY(-5px);
            }

            .top-right {
                position: absolute;
                right: 30px;
                top: 30px;
            }

            .top-right a {
                font-size: 16px;
                color: #3490dc;
                text-decoration: none;
                margin-left: 15px;
                font-weight: 600;
            }

            .top-right a:hover {
                color: #fff;
                background: #3490dc;
                padding: 8px 15px;
                border-radius: 20px;
            }

            @media (max-width: 768px) {
                .title {
                    font-size: 60px;
                }

                .links {
                    grid-template-columns: 1fr;
                }
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
