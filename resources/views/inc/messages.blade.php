@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif

@if(session('cookie_expired'))
	<div class="alert alert-danger">
		{{session('cookie_expired')}}
	</div>
@endif