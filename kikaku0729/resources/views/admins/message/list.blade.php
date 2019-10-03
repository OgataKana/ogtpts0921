@extends('admins.share.base')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ユーザー</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

    <table class="table table-striped table-bordered">
            <div class="favorite">

                <tr>
                    <th>ユーザー名</th>
                    <th>メール作成</th>
                </tr>

                @foreach($lists as $list)
            <tr>
                <td>{{ $list->user_name }}</td>

                <td><a href="mailto:{{ $list->user_email }}?subject=Bwinマッチングしました！！" >メール</a>
                </td>
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
