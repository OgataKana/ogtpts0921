@extends('users.share.base')
@section('content')
<table class="table table-striped table-bordered">
    <div class="request">
        <h3>企業側からのリクエスト</h3>
        <tr>
            <th>企業名：ブランド名</th>
            <th>承諾</th>
            <th>拒否</th>

        </tr>
        @foreach($requests as $request)
        <tr>
            <td>{{ $request->admin_id }}</td>
            <td><button >承諾</button></td>
            <td><button >拒否</button></td>

      </tr>
      @endforeach

    </div>
</table>
<table class="table table-striped table-bordered">
    <div class="favorite">
        <h3>企業側へのアプローチ</h3>
        <tr>
            <th>企業名：ブランド名</th>
            <th>取消</th>

        </tr>
          @foreach($favorites as $favorite)
          <tr>
            <td>{{ $favorite->admin_id }}</td>
            <td><button>取消</button></td>

          </tr>
          @endforeach

    </div>
</table>

@endsection
