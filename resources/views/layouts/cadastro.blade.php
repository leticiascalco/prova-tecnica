@extends('layouts.default-home') 
@section('content')

<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Cadastre-se</div>
	<!-- Main Form -->
	<div class="login-form-1">
		@if($errors->any())
			<ul class="alert">
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
		{!! Form::open(['route'=>'user.create', 'method'=>'post', 'id'=>'login-form', 'class'=>'text-left']) !!}
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<input type="text" class="form-control Nome" id="Nome" name="name" placeholder="Nome">
					</div>
					<div class="form-group">					
						<input type="text" class="form-control Email" id="Email" name="email" placeholder="E-mail">
					</div>
					<div class="form-group">						
						<input type="password" class="form-control Senha" id="Senha" name="password" placeholder="Senha">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i>Enviar</button>
				<div class="etc-login-form">
				<p>Ja tem cadastro? <a href="/">Faça Login</a></p>
			</div>
			</div>
		{!!Form::close() !!}
	</div>
	<!-- end:Main Form -->
</div>

@stop