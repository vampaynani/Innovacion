<div id="sidebar">
	<div id="perfil">
		<img src="">
		<div id="info">
			<p>Nombre Apellido</p>
			<p><a href="">/perfil</a></p>
		</div>
	</div>
	<div id="menu">
		<a href="{{ URL::action('HomeController@premio') }}" class="menu-item active"><img src="imgs/menu1.png"></a>
		<div id="submenu">
			<a href="{{ URL::action('HomeController@inspiracion') }}" class="submenu-item"><img src="imgs/menu2-1.png"></a>
			<a href="{{ URL::action('HomeController@herramientas') }}" class="submenu-item"><img src="imgs/menu2-2.png"></a>
			<a href="{{ URL::action('HomeController@documentacion') }}" class="submenu-item"><img src="imgs/menu2-3.png"></a>
		</div>
		<a href="{{ URL::action('HomeController@getIpad') }}" class="menu-item"><img src="imgs/menu3.png"></a>
	</div>
	<ul>
		<li style="background:url(imgs/equipo-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@equipo') }}">Me falta: idea / equipo</a></li>
		<li style="background:url(imgs/ayuda-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@faq') }}">Ayuda</a></li>
		<li style="background:url(imgs/volver-icon.png) left center no-repeat;"><a href="{{ URL::action('HomeController@premio') }}">Volver</a></li>
	</ul>
	<!--<input type="text" id="buscar" placeholder="Buscar...">-->
</div>