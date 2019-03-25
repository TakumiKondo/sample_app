@extends('layout.layout')

@section('content')
<div class="container">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	@endif

	@if(isset($msg))
		<li>{{$msg}}</li>
	@endif

	<p class="lead">ログイン画面</p>

	<form action="{{ route('login') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<button type="submit" class="btn btn-primary">ログイン</button>
	</form>
</div>
@endsection