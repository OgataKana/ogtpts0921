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
                /* font-family: 'HiraMinPro-W6'; */
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
            /* .links{
                text-align: center;
            } */

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
            .howto {
                color: #636b6f;
                text-align: center;
                width: 90%;
                margin: auto;
                padding: 10px;
                border: 1px solid #aaa;
                -webkit-align-items: center;
                align-items: center;
                margin-bottom: 200px;
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
    {{-- <div class="header"> --}}

    {{-- </div> --}}
            <div class="content">
                {{-- <div class="title m-b-md" position="center">
                    <!--WELCOME-->
                </div> --}}
                <div>
                     <p style="height: 100px;"> <img src="{{asset('images/parts/logo-a.png')}}" alt="" height="100px" weight="" ><p>
                    {{-- <a href="{{ route('top') }}"><img src="{{asset('images/parts/logo.png')}}" alt="" height="100px" weight="" ></a> --}}
                </div>
                   <img src="{{asset('images/parts/welcom2.png')}}" alt="" width="100%" height="30%">
                <div class="links">
                    <a href="{{ route('login') }}">User Login</a>
                    <a href="{{ route('register') }}">User SingUp</a>
                    <a href="{{ route('admin.login') }}">Company Login</a>
                    <a href="{{ route('admin.register') }}">Company SingUP</a><br/><br/><br/>
                </div>



            </div>
        </div>
        <div class="howto" >



                <h2>Photo　Trade　Serviceについて</h2>
            <br/><br/>
                <p>アパレル業界に特化した画像売買のマッチングプラットフォームです。</p>
                <p>近年、アパレルECは激戦状況です。</p>
                <p>そのなかで売るとなると,</p>
                <p>どれだけユーザーにマッチする画像であるかが重要となっています。</p>
                <br/><br/>
                <p>近年の傾向として、インスタグラマーの需要の高さが見立ちます。</p>
                <p>理由として、個人でありながら自己プロデュース力・プレゼン力があり</p>
                <p>多くのファンを獲得しているので、メディア離れの進んだ若年層へのPRとして最適です。</p>
                <br/>
                <p>そこで、人の心をつかむ画像を得意とする方や</p>
                <p>積極的にアパレルの仕事をしたい方を</p>
                <p>常に画像で悩んでいるアパレル企業とマッチングさせ、</p>
                <p>いい画像を商品画像として買い取るプラットフォームを</p>
                <p>企画しました。</p><br/><br/>

                <p>このサービスは、アパレル業界全体の在庫や廃棄が減り、</p>
                <p>現状の安さの価格競争が終わりをむかえ</p>
                <p>ブランドの魅力で売上を作るブランドが増えることを可能にします。</p>
                <br/><br/>
                <p>そして今までの</p>
                <p>企業側が探して→依頼するのみの形態から</p>
                <p>提供したい人が企業にアプローチが可能に！</p>
                <p>既存の形態よりマッチングがスムーズになります。</p>
                <br/><br/>

            <h3>人一人雇うより安い</h3>

                <p>時間と資金を有益に使えるサービスを</p>
                <p>多くのアパレル企業に提案します。</p>
                <br/><br/>



        </div>
    </body>
</html>
