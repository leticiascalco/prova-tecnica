@extends('layouts.default-home') 
@section('content')

<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Logar-se</div>
			@if($errors->any())
			<ul class="alert">
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
	<!-- Main Form -->
	<div class="login-form-1">
		{!! Form::open(['url'=>'auth/login', 'method'=>'post', 'id'=>'login-form', 'class'=>'text-left']) !!}
		
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
				
					<div class="form-group">
						<label for="lg_username" class="sr-only">E-mail</label>
						<input type="text" class="form-control" id="lg_username" name="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" id="lg_password" name="password" placeholder="Senha">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i>Enviar</button>
			</div>
			<div class="etc-login-form">
				<p>Novo usuário? <a href="/cadastro">crie sua conta</a></p>
			</div>
		{!!Form::close() !!}
	</div>
	<!-- end:Main Form -->
</div>

@stop