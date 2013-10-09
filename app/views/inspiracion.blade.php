@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="inspiracion">
		<div id="filtro">
			<p><img src="imgs/flecha-filtrar.png">Filtrar</p>
			<ul>
				<li class="rojo"><a href="">Videos</a></li>
				<li class="azul"><a href="">Imágenes</a></li>
				<li class="verde"><a href="">Artículos</a></li>
			</ul>
		</div>
		<div class="grid">
			<div class="element imagen">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
			<div class="element video">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
			<div class="element descargar">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
			<div class="element enlace">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
			<div class="element ">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
			<div class="element imagen">
				<div class="thumb">
					<a href=""><div class="overlay"></div>
					<img src="imgs/imagen.png"></a>
					<div class="iconos">
						<a href=""><img src="imgs/facebook-icon.png"></a>
						<a href=""><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>Steve Jobs</h1>
				<p>Lorem ipsum dolor sit amet henu sohit gambran doisum. </p>
			</div>
		</div>
	</div>
	<div id="over"><a href=""><img src="imgs/top.png"></a></div>
@stop
