@extends('users.share.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">企業一覧</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif




<table class="table table-striped table-bordered">
  <tr>
    <th>企業名：ブランド名</th>
    {{-- <th>性別ジャンル</th> --}}
    <th>系統ジャンル</th>
    <th>like</th>
    <!--<th>ブランド説明</th>-->

  </tr>
  @foreach($admins as $admin)
  <tr>
    <td>{{ $admin->admin_name }}</td>
    {{-- <td>{{ $admin->admin_gender }}</td> --}}
    <td>{{ $admin->admin_genre }}</td>
    <td><button class="btn-iine" data-admin_id="{{$admin->admin_id}}" $host = 'admin';><img src="{{asset('images/parts/iine.png')}}" alt="" height="10px" width="10px"></button></td>

    <!--<td>{{ $admin->admin_text }}</td>-->

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
