@extends('layout.layout')

@section('content')
<div class="container">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	@endif

	<p class="lead">ログイン画面</p>

	<form action="/login" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" name="email">{{ old('email') }}
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password">{{ old('password') }}
		</div>
		<button type="submit" class="btn btn-primary">ログイン</button>
	</form>
</div>
@endsection