@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="herramientas">
		<div id="filtro">
			<p><img src="imgs/flecha-filtrar.png">Filtrar</p>
			<ul>
			@foreach($subcats as $sub)
				<li class="{{ $sub->colorSub }} active"><a data-id="{{ $sub->id }}">{{ $sub->nomSub }}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="grid">
		@foreach($files as $file)
			@if ($file->tarch_id === '1')
			<div class="element imagen">
			@elseif ($file->tarch_id === '2')
			<div class="element video">
			@elseif ($file->tarch_id === '3')
			<div class="element descargar">
			@elseif ($file->tarch_id === '4')
			<div class="element enlace">
			@endif
				<div class="thumb">
					@if ($file->tarch_id === '1')
					<a href="uploads/{{ $file->linkArch }}" rel="prettyPhoto">
					@elseif ($file->tarch_id === '2')
					<a href="{{ $file->linkArch }}" rel="prettyPhoto">
					@elseif ($file->tarch_id === '3')
					<a href="download/{{ $file->linkArch }}">
					@elseif ($file->tarch_id === '4')
					<a href="{{ $file->linkArch }}" target="_blank">
					@endif
						<div class="overlay"></div>
						<img src="previews/{{ $file->imgArch }}">
					</a>
					<div class="iconos">
						<a class="fb-share" href="{{ URL::action('HomeController@inspiracion') }}/{{ $file->id }}"><img src="imgs/facebook-icon.png"></a>
						<a class="tw-share" href="{{ URL::action('HomeController@inspiracion') }}/{{ $file->id }}"><img src="imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>{{ $file->nomArch }}</h1>
				<p>{{ $file->descArch }}</p>
			</div>
		@endforeach
		</div>
	</div>
	<div id="over"><a href=""><img src="imgs/top.png"></a></div>
@stop