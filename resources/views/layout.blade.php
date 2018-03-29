<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos App</title>

        <!-- Fonts -->
        <link href="{{ asset('app/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('app/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background: #313131 url(../images/bg10.jpg) center;
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

           

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .maintitle {
                font-size: 84px;
            }

            .links > a {
                color: #c53f3f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a {
                color: #c53f3f;
            }

            a:hover{
                color: #A13435;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body>
      @if(Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
        @elseif(Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
      @endif
        <div class="position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                   @yield('content')
                </div>

            </div>
        </div>
    </body>
</html>
