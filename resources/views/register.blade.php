@extends('layout.layout')

@section('content')
<div class="container">
	@if(isset($errors))
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	@endif

	<p class="lead">ユーザ登録画面</p>

	<form action="{{ Route('registUser') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="{{ old('name') }}">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" name="email" value="{{ old('email') }}">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password">
		</div>
		<div class="form-group">
			<label>Password再入力</label>
			<input type="password" class="form-control" name="password_confirmation">
		</div>
		<button type="submit" class="btn btn-primary">登録</button>
	</form>

</div>
@endsection