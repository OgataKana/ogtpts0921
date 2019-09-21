<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kikaku</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #F8F8FF;
                font-family: 'HiraMinPro-W6';
                /*'Raleway', sans-serif,'Courier New';*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .header{
                background-color:#bbbb;
                height:30px;
            }

            .full-height {
                height: 60vh;
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
                padding: 15px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .header{
                background-color: #DDDDDD;
                /*padding: 20px;*/
                height: 55px;
            }


        </style>

    </head>
    <body>

    <!--    <div class="flex-center position-ref full-height">-->
    <!--        @if (Route::has('login'))-->

                   <!--<div class="top-right links ">-->
    <!--                @auth-->
                        <!--<a href="{{ url('/home') }}">Home</a>-->
    <!--                @else-->
                        <!--<a href="{{ route('login') }}">Login</a>-->
                        <!--<a href="{{ route('register') }}">Register</a>-->
    <!--                @endauth-->
    <!--                </div>-->
    <!--    </div>-->
    <!--@endif-->
    <div class="header">

    </div>
            <div class="content">
                <div class="title m-b-md" position="center">
                    <!--WELCOME-->
                </div>
                   <img src="{{asset('images/parts/welcom2.png')}}" alt="" width="100%" height="30%">
                <div class="links">

                    <a href="{{ route('login') }}">User Login</a>
                    <a href="{{ route('register') }}">User SingUp</a>
                    <a href="{{ route('admin.login') }}">Company Login</a>
                    <a href="{{ route('admin.register') }}">Company SingUP</a></br></br></br>
                    <a href="{{ route('top') }}">初めての方***について</a>


                </div>
            </div>
        </div>
    </body>
</html>
