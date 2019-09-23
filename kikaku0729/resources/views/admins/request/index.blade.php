@extends('admins.share.base')
@section('content')
<table class="table table-striped table-bordered">
		<div class="favorite">
			<h3>ユーザーからのアプローチ</h3>
			<tr>
				<th>ユーザー名</th>
				<th>依頼</th>
				<th>拒否</th>

			</tr>

			@foreach($favorites as $favorite)
			<tr>
				<td>{{ $favorite->user_id }}</td>
				<td><button >依頼</button></td>
            	<td><button >拒否</button></td>

		  </tr>
		  @endforeach

		</div>
	</table>
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

@endsection
