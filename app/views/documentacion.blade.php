@extends('layout.site')
@section('content')
	@include('widget.sidebar')
	<div id="content" class="documentacion">
		@if($file)
			@if ($file->tarch_id === '1')
			<a style="display:none" id="file_url" rel="imgSlide" href="{{ Request::root() }}/uploads/{{ $file->linkArch }}"></a>
			@elseif ($file->tarch_id === '2')
			<a style="display:none" id="file_url" rel="vidSlide" href="{{ $file->linkArch }}"></a>
			@elseif ($file->tarch_id === '3')
			<a style="display:none" id="file_url" class="download" href="{{ Request::root() }}/download/{{ $file->linkArch }}"></a>
			@elseif ($file->tarch_id === '4')
			<a style="display:none" id="file_url" rel="linkSlide" href="{{ $file->linkArch }}?iframe=true&width=480&height=320"></a>
			@endif
		@endif
		<div id="filtro">
			<p><img src="{{ Request::root() }}/imgs/flecha-filtrar.png">Filtrar</p>
			<ul>
			@foreach($subcats as $sub)
				<li class="{{ $sub->colorSub }} active"><a data-id="{{ $sub->id }}">{{ $sub->nomSub }}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="grid">
		@foreach($files as $file)
			@if ($file->tarch_id === '1')
			<div class="element imagen {{ $file->subcat_id }}">
			@elseif ($file->tarch_id === '2')
			<div class="element video {{ $file->subcat_id }}">
			@elseif ($file->tarch_id === '3')
			<div class="element descargar {{ $file->subcat_id }}">
			@elseif ($file->tarch_id === '4')
			<div class="element enlace {{ $file->subcat_id }}">
			@endif
				<div class="thumb">
					@if ($file->tarch_id === '1')
					<a id="{{ $file->id }}" href="{{ Request::root() }}/uploads/{{ $file->linkArch }}" rel="imgSlide">
					@elseif ($file->tarch_id === '2')
					<a id="{{ $file->id }}" href="{{ $file->linkArch }}" rel="vidSlide">
					@elseif ($file->tarch_id === '3')
					<a id="{{ $file->id }}" href="{{ Request::root() }}/download/{{ $file->linkArch }}">
					@elseif ($file->tarch_id === '4')
					<a id="{{ $file->id }}" href="{{ $file->linkArch }}?iframe=true&width=480&height=320" rel="linkSlide">
					@endif
						<div class="overlay"></div>
						<img src="{{ Request::root() }}/previews/{{ $file->imgArch }}">
					</a>
					<div class="iconos">
						<a class="fb-share" href="{{ URL::action('HomeController@documentacion') }}/{{ $file->id }}"><img src="{{ Request::root() }}/imgs/facebook-icon.png"></a>
						<a class="tw-share" href="{{ URL::action('HomeController@documentacion') }}/{{ $file->id }}"><img src="{{ Request::root() }}/imgs/twitter-icon.png"></a>
					</div>
				</div>
				<h1>{{ $file->nomArch }}</h1>
				<p>{{ $file->descArch }}</p>
			</div>
		@endforeach
		</div>
	</div>
	<div id="over"><a href=""><img src="{{ Request::root() }}/imgs/top.png"></a></div>
@stop