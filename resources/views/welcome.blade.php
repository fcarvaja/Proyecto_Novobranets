<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Novobranets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('../uploads/PUCV.jpg');
                background-position: fixed;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: top;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 180px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                background-color: #fff;
                margin: 200px;
            }

            .links > a {

                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                color: white;
            }


            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: #111;
            }
        </style>
    </head>
    <body>
        <ul>
            <h2>Pontificia Universidad Catolica de Valparaiso</h2>
        </ul>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Novobranets
                </div>
                @if (Route::has('login'))
                <div class="content">
                    @auth
                        <a class="btn btn-primary pull-right" href="{{ url('/home') }}" role="button">Home</a>
                    @else
                        <a class="btn btn-primary pull-right" href="{{ route('login') }}" role="button">Ingresar</a>
                        @if (Route::has('register'))
                            <a class="btn btn-primary pull-right" href="{{ route('register') }}" role="button">Registrarse</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
