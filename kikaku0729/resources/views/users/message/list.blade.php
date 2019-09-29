@extends('users.share.base')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">企業</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

    <table class="table table-striped table-bordered">
            <div class="favorite">

                <tr>
                    <th>企業名</th>

                </tr>

                {{-- @foreach($listss as $list)
                <tr>
                    <td><a>{{ $lists->user_id }}</a></td>

                </tr>
        @endforeach --}}
    </table>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection
