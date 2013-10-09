@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="faq">
		<div id="faq">
			<h1>Preguntas Frecuentes</h1>
			<!--
			<dl>
				<dt>Pregunta</dt>
				<dd>Sed congue auctor fringilla. Maecenas et nibh id metus hendrerit tincidunt. Pellentesque habitant morbi</dd>
				<dt>Pregunta 2</dt>
				<dd>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</dd>
			</dl>
			-->
			<ol>
				<div id="q" class="active"><li>Pregunta</li></div>
				<div id="a"><p>Sed congue auctor fringilla. Maecenas et nibh id metus hendrerit tincidunt. Pellentesque habitant morbi</p></div>
				<div id="q"><li>Pregunta 2</li></div>
				<div id="a"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
				<div id="q"><li>Pregunta 2</li></div>
				<div id="a"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
				<div id="q"><li>Pregunta 2</li></div>
				<div id="a"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
				<div id="q"><li>Pregunta 2</li></div>
				<div id="a"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
				<div id="q"><li>Pregunta 2</li></div>
				<div id="a"><p>Nulla commodo est tellus, a mollis sem bibendum a. Vestibulum sed aliquet justo</p></div>
			</ol>
		</div>
	</div>
	<div id="over"><a href=""><img src="imgs/top.png"></a></div>
@stop