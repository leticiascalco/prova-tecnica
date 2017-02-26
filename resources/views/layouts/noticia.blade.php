@extends('layouts.default-home') 
@section('content')



<!-- LOGIN FORM -->
<div class="" style="padding:50px 0">
	

	<!-- Main Form -->
	<div class="">
		<div class="top text-center">
		    <h1><a href="{{ $feed['permalink'] }}" target="_blanc">{{ $feed['title'] }}</a></h1>
		 </div>
		 
		 	@foreach ($feed['items'] as $item)
		 	<div class="col-md-6">
		  	<div class="panel  panel-custom">
			<div class="panel-heading"> <h1 class="panel-title"><a href="{{ $item->get_permalink() }}" target="_blanc">{{ $item->get_title() }}</a></h1> </div>
			  <div class="panel-body">
			    <p><small>Posted on {{ $item->get_date('j F Y | g:i a') }}</small></p>
			  </div>
			</div>		    
		   </div>
		  	@endforeach
		 
		  
	</div>
	<!-- end:Main Form -->
</div>

@stop