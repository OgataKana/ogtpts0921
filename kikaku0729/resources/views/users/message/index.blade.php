@extends('users.share.base')

@section('content')
<div class='container'>

        <form action="/mail/create" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div>
                To:企業名
                <input type="text" class="form-control" name="admin_name" value="{{$admin->admin_name}}">
            </div>
            <div>
                To:メールアドレス
                <input type="text" class="form-control" name="admin_email" value="{{$admin->admin_email}}">
            </div>
            <div>
                From:メールアドレス
                <input type="text" class="form-control" name="user_email" value="{{$user->user_email}}">
            </div>
            <div>
                コメント
                <input type="text" class="form-control" name="user_comment" value="">
            </div>


            <button type= "submit" class="btn">送信</button>
        </form>
    </div>

@endsection
