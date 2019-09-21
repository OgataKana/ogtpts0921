@extends('admins.share.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h3>ユーザー一覧</h3>
<table class="table table-striped table-bordered">
  <tr>
    <!--<th>user_ID</th>-->
    <th>NAME</th>
    <th>身長</th>
    <th>ジャンル</th>
    <th><img src="{{asset('images/parts/iine2.jpeg')}}" alt="" height="10px" width="10px"></th>

  </tr>

  @foreach($users as $user)
  <tr>
    <td>{{ $user->user_name }}</td>
    <td><button class="btn-iine-a" data-user_id="{{ $user->user_id}}"><img src="{{asset('images/parts/iine.png')}}" alt="" height="10px" width="10px"></button></td>

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
