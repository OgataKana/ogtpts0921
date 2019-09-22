@extends('users.share.base')
@section('content')

新規ユーザー登録フォーム


<div class='container'>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div>
            お名前(非表示)
            <input type="text" class="form-control" name="user_name" value='{{$user->user_name}}'>
        </div>
        <div>
            ニックネーム(表示)
            <input type="text" class="form-control" name="user_nickname" value="{{$user->user_nickname}}">
        </div>
        <div>
            電話番号
            <input type="text" class="form-control" name="user_tel" value="{{$user->user_tel}}">
        </div>
        <div>
            メールアドレス
            <input type="text" class="form-control" name="user_email" value="{{$user->user_email}}">
        </div>
         <div>
            郵便番号
            <input type="tel" class="form-control" name="zipcode" value="{{mb_substr($user->user_address,0,7)}}">
        </div>
        <div>
            住所
            <input type="text" class="form-control" name="user_address" value="{{mb_substr($user->user_address,7)}}">
        </div>
        <div>
            性別
            <input name="user_gender" type="radio" value="1" @if($user->user_gender == 1) checked @endif>男性<input name="user_gender" type="radio" value="2"@if($user->user_gender == 2) checked @endif>女性<input name="user_gender" type="radio" value="3"@if($user->user_gender == 3) checked @endif>その他

        </div>
        <div>
            身長
            <input type="text" class="form-control" name="user_height" value="{{$user->user_height}}">
        </div>
        <div>
            ジャンル
            <select name="user_genre" id="">
                <option value="カジュア">カジュアル</option>
                <option value="フェミニン">フェミニン</option>
                <option value="スポーティ">スポーティ</option>
                <option value="ストリート">ストリート</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div>
            使用撮影機器(スマホ/一眼など)
            <input type="text" class="form-control" name="user_camera_id" value="{{$user->user_camera_id}}">
        </div>
        <div>
            profile画像(ロゴなど)

            @if($user->image)
            <img src="{{$user->image}}" alt="">
            @endif
             <input type="file" value="" name="image">
        </div>

        <div>
            pw
            <input type="text" class="form-control" >
        </div>

        <button type= "submit" class="btn">送信</button>
    </form>
</div>
@endsection
