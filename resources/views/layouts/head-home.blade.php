 @if ( \Illuminate\Support\Facades\Auth::check() === true)
<div class="userTop pull-right">
    	<h4>Olá {{ Auth::User()->name }}, acompanhe as últimas notícias - <a href="/auth/logout"><span class="icon-power"></span>Sair</a></h4>
    </div>
 @endif