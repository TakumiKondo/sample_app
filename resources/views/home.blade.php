@extends('layout.layout')

@section('content')
<div class="container">
	<p class="lead">ホーム画面	</p>
	@if(Auth::check() && Session::has('user_name'))
		{{ 'こんにちは！' . Session::get('user_name') . 'さん！' }}
	@endif
</div>
@endsection