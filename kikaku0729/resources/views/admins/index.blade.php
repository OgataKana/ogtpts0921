@extends('admins.share.layout')

@section('title')
Item Management
@stop

@section('sidebar')
    @include('admins.sidebar')
@stop


@section('content')

<section class="content-header">
<h1>Item</h1>
<ol class="breadcrumb">
	<li><a href="">Home</a></li>
	<li>Item</li>
	<li>Index</li>
</ol>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			content
		</div>
	</div>
</section>

@stop

@section('sctipt')
<script>
// $(function(){
//     $("#item").addClass("active");
//     $("#index").addClass("active");
// });
</script>
@stop
