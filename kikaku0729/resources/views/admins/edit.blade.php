@extends('admins.share.base')

@section('content')

企業編集フォーム


<div class='container'>
    
    <form action="/admins/store" method="POST" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        
        <div>
            企業名
            <input type="text" class="form-control" name="admin_name" value="{{$admin->admin_name}}">
        </div>
        <div>
            電話番号
            <input type="text" class="form-control" name="admin_tel" value="{{$admin->admin_tel}}">
        </div>
        <div>
            メールアドレス
            <input type="text" class="form-control" name="admin_email" value="{{$admin->admin_email}}">
        </div> 
        <div>
            郵便番号
            <input type="tel" class="form-control" name="admin_zipcode" value="{{mb_substr($admin->admin_address,0,7)}}">
        </div>
        <div>
            住所
            <input type="text" class="form-control" name="admin_address" value="{{mb_substr($admin->admin_address,7)}}">
        </div>
        <div>
            販売サイトURL
            <input type="text" class="form-control" name="ec_url" value="{{$admin->ec_url}}">
        </div>
        <div>
            profile画像(ブランドロゴなど)
           
            @if($admin->admin_image)
            <img src="/storage/{{$admin->admin_image}}" alt="">
            @endif
             <input type="file" value="" name="admin_image">
        </div>
         <div>
            ジャンル
            <select name="admin_genre" id="">
                <option value="カジュア">カジュアル</option>
                <option value="フェミニン">フェミニン</option>
                <option value="スポーティ">スポーティ</option>
                <option value="ストリート">ストリート</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div>
            パスワード
            <input type="text" class="form-control" >
        </div>
    
        <button type= "submit" class="btn">送信</button>
    </form>
</div>
@endsection