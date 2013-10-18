<div id="sidebar">
	<div id="perfil">
		<img src="{{ $profile_image }}">
		<div id="info">
			<p>{{ $name }}</p>
			<p><a href="http://facebook.com/{{ $username }}" target="_blank">/{{ $username }}</a></p>
		</div>
	</div>
	<div id="menu">
		<a href="{{ URL::action('HomeController@premio') }}" class="menu-item active"><img src="{{ Request::root() }}/imgs/menu1.png"></a>
		<div id="submenu">
			<a href="{{ URL::action('HomeController@inspiracion') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-1.png"></a>
			<a href="{{ URL::action('HomeController@herramientas') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-2.png"></a>
			<a href="{{ URL::action('HomeController@documentacion') }}" class="submenu-item"><img src="{{ Request::root() }}/imgs/menu2-3.png"></a>
		</div>
		<a href="{{ URL::action('HomeController@getIpad') }}" class="menu-item"><img src="{{ Request::root() }}/imgs/menu3.png"></a>
	</div>
	<ul>
		<li id="opt-equipo" style="background:url({{ Request::root() }}/imgs/equipo-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@equipo') }}">Me falta: idea / equipo</a></li>
		<li style="background:url({{ Request::root() }}/imgs/ayuda-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@faq') }}">Ayuda</a></li>
		<li style="background:url({{ Request::root() }}/imgs/volver-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@premio') }}">Volver</a></li>
	</ul>
	<!--<input type="text" id="buscar" placeholder="Buscar...">-->
</div>