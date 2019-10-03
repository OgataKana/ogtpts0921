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
            <td>{{ $list->admin_name }}</td>
            <td>
                <a href="{{ route('maillist') }}">承諾</a>

            </td>
            <td>
                <a href="{{ route('favorite') }}">拒否</a>

            </td>
            </form>
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
