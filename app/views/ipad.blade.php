@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="ipad">
		<div id="ipad" class="pregunta">
			<form method="post">
				<div id="texto"><textarea name="message" placeholder="Escribe tu respuesta..."></textarea>
				</div>
				<input type="submit" value="" class="enviarBtn" />
			</form>	
		</div>
	</div>
	<div id="over"><a href=""><img src="imgs/top.png"></a></div>
@stop