@extends('admins.share.base')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザーからのアプローチ</div>

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
				<th>依頼</th>
				<th>拒否</th>
			</tr>

		@foreach($listss as $list)
			<tr>
				<td>{{ $lists->user_id }}</td>
				<td><button class="ok_btn">依頼</button></td>
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


{{--
	<table class="table table-striped table-bordered">
		<div class="request">
			<h3>ユーザーへのリクエスト</h3>
			<tr>
				<th>ユーザー名</th>
				<th>取消</th>

			</tr>
			@foreach($requests as $request)
			  <tr>
				<td>{{ $request->user_id }}</td>
				<td><button>取消</button></td>

			  </tr>
			  @endforeach

		</div>
	</table>

@endsection --}}
