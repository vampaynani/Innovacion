<div id="sidebar">
	<div id="perfil">
		<div id="imagen">
			<span><img src="{{ $profile_image }}"></span>
		</div>
		<div id="info">
			<span>
				<p>{{ $name }}</p>
				<p><a href="http://facebook.com/{{ $username }}" target="_blank">/{{ $username }}</a></p>
			</span>
		</div>
	</div>
	<div id="menu">
		@if(Request::is('premio'))
		<a href="{{ URL::action('HomeController@premio') }}" class="menu-item active"><img src="{{ Request::root() }}/imgs/menu1.png"></a>
		@else
		<a href="{{ URL::action('HomeController@premio') }}" class="menu-item"><img src="{{ Request::root() }}/imgs/menu1.png"></a>
		@endif
		<div id="submenu">
			@if(Request::is('inspiracion'))
			<a href="{{ URL::action('HomeController@inspiracion') }}" class="submenu-item active"><img src="{{ Request::root() }}/imgs/menu2-1.png"></a>
			@else
			<a href="{{ URL::action('HomeController@inspiracion') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-1.png"></a>
			@endif
			@if(Request::is('herramientas'))
			<a href="{{ URL::action('HomeController@herramientas') }}" class="submenu-item active"><img src="{{ Request::root() }}/imgs/menu2-2.png"></a>
			@else
			<a href="{{ URL::action('HomeController@herramientas') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-2.png"></a>
			@endif
			@if(Request::is('documentacion'))
			<a href="{{ URL::action('HomeController@documentacion') }}" class="submenu-item active"><img src="{{ Request::root() }}/imgs/menu2-3.png"></a>
			@else
			<a href="{{ URL::action('HomeController@documentacion') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-3.png"></a>
			@endif
		</div>
		@if(Request::is('ipad'))
		<a href="{{ URL::action('HomeController@getIpad') }}" class="menu-item active"><img src="{{ Request::root() }}/imgs/menu3.png"></a>
		@else
		<a href="{{ URL::action('HomeController@getIpad') }}" class="menu-item"><img src="{{ Request::root() }}/imgs/menu3.png"></a>
		@endif
	</div>
	<ul>
		<li id="opt-equipo" style="background:url({{ Request::root() }}/imgs/equipo-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@equipo') }}">Me falta: idea / equipo</a></li>
		<li style="background:url({{ Request::root() }}/imgs/ayuda-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@faq') }}">Preguntas frecuentes</a></li>
		<li style="background:url({{ Request::root() }}/imgs/volver-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@premio') }}">Volver</a></li>
	</ul>
	<!--<input type="text" id="buscar" placeholder="Buscar...">-->
</div>