@extends('admins.share.base')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザー一覧</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<table class="table table-striped table-bordered">
  <tr>
    <!--<th>user_ID</th>-->
    <th>NAME</th>
    <th>身長</th>
    <th>性別</th>
    <th>系統ジャンル</th>
    <th><img src="{{asset('images/parts/iine2.jpeg')}}" alt="" height="10px" width="10px"></th>

  </tr>

  @foreach($users as $user)
  <tr>
    <td>{{ $user->user_nickname }}</td>
    <td>{{ $user->user_height }}cm</td>
    <td>{{ $user->user_gender }}</td>
    <td>{{ $user->user_genre }}</td>
    <td><button class="btn-iine" data-user_id="{{ $user->user_id}}"><img src="{{asset('images/parts/iine.png')}}" alt="" height="10px" width="10px"></button></td>

    <!--<td>{{ $user->user_text }}</td>-->

  </tr>
  @endforeach
</table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
