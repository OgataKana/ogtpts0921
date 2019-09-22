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
                /*background-color: #E6E6FA;*/
                color: #636b6f;
                /* font-family: 'HiraMinPro-W6'; */
                /*'Raleway', sans-serif,'Courier New';*/
                /* font-weight: 100; */
                /* height: ; */
                margin-bottom: 500px;
                text-align: center;
                margin: auto;
            }
            body{
                margin-bottom: 200px;
            }
            .flex-center position-ref full-height{
                height:500px;
            }

            /* .full-height {
                height: 100vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            /*.position-ref {*/
            /*    position: relative;*/
            /*}*/

            /*.top-right {*/
            /*    position: absolute;*/
            /*    right: 10px;*/
            /*    top: 18px;*/
            /*}*/

            /*.content {*/
            /*    text-align: center;*/
            /*}*/

            /*.title {*/
            /*    font-size: 84px;*/
            /*}*/

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /*.m-b-md {*/
            /*    margin-bottom: 30px;*/
            /*}*/

            .howto {
                text-align: center;
                width: 90%;
                margin: auto;
                padding: 10px;
                border: 1px solid #aaa;
                -webkit-align-items: center;
                align-items: center;
            }
            /* .img{
                text-align: center;
                margin: auto;
            } */


        </style>
    </head>
    <body>
         <div class="flex-center position-ref full-height">
                <p><img src="{{asset('images/parts/logo-a.png')}}" alt="" height="200px" weight="" padding="50px"></p>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href={{ url('/') }}>Login/SingUP</a>
                        <!--<a href="{{ route('register') }}">Register</a>-->
                    @endauth
                </div>
            @endif
            <!--画像表示-->
            {{-- <img src="{{asset('images/parts/top.jpg')}}" alt="" height="300px" weight=""> --}}
        </div>

        <div class="howto" >



                <h2>Photo　Trade　Serviceについて</h2>
            <br/><br/>
                <p>アパレル業界に特化した画像売買のマッチングプラットフォームです。</p>
                <p>近年、アパレルECは激戦状況です。</p>
                <p>そのなかで、売るとなるとどれどけユーザーにマッチする</p>
                <p>画像であるかが重要となっています。</p>
                <br/><br/>
                <p>近年の傾向として、インスタグラマーの需要の高さが見立ちます。</p>
                <p>理由として、個人でありながら自己プロデュース力・プレゼン力があり</p>
                <p>多くのファンを獲得しているので、メディア離れの進んだ若年層へのPRとして最適です。</p>



                <p>そこで、人の心をつかむ画像を得意とする方々と</p>
                <p>常に画像で悩んでいるアパレル企業をマッチングさせ、</p>
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







        </div>




    </body>
</html>
