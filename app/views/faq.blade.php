@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="faq">
		<div id="faq">
			<h1>Preguntas Frecuentes</h1>
			<ol>
				<div class="question active"><li>Pregunta</li></div>
				<div class="answer"><p>Sed congue auctor fringilla. Maecenas et nibh id metus hendrerit tincidunt. Pellentesque habitant morbi</p></div>
				<div class="question"><li>Pregunta 2</li></div>
				<div class="answer"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
			</ol>
		</div>
	</div>
	<div id="over"><a href=""><img src="imgs/top.png"></a></div>
@stop