@extends('layout.site')
@section('content')
	<div id="like">
		<a href="{{ URL::action('HomeController@premio') }}" id="facebook-like"><img src="imgs/like-btn.png"></a>
	</div>
@stop