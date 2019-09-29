@extends('users.share.base')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">企業側からのリクエスト</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
					@endif

<table class="table table-striped table-bordered">
		<div class="request">

			<tr>
			<th>企業名：ブランド名</th>
            <th>承諾</th>
            <th>拒否</th>
			</tr>
{{-- Favorite_tableからUserIDが自分のものを取得
    そうすると、自分にいいね！した企業にみ絞れる
    Favorite＿tableのなかにあるadmin＿idを使って
    誰なのかadmin_nameを表示する--}}

        @foreach($lists as $list)
        <tr>
            <td>{{ $list->admin_id }}</td>
            <td><button class="ok_btn">承諾</button></td>
            <td><button class="no_btn">拒否</button></td>

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

{{-- <table class="table table-striped table-bordered">
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

@endsection --}}
