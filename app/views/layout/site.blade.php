<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="iso-8859-1">
	<title>Premio Santander a la Innovaci&oacute;n Empresarial</title>
	<link rel="stylesheet" href="{{ Request::root() }}/css/normalize.css" />
	<link rel="stylesheet/less" href="{{ Request::root() }}/styles.less" />
	<link rel="stylesheet" href="{{ Request::root() }}/css/prettyPhoto.css" media="screen" />
</head>
<body>
	<div id="fb-root"></div>
	<script>
	 window.fbAsyncInit = function() {
	 	// init the FB JS SDK
		FB.init({
	      appId      : '531422446938110',                        
	      status     : true,                                 
	      cookie      : true                                 
	    });

	    // Additional initialization code such as adding Event Listeners goes here
	  };

	  // Load the SDK asynchronously
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="container">
		@yield('content')
		@if (!Request::is('/'))
		<div id="over"><a href="http://www.premiosantander.com/premio2013/"><img src="{{ Request::root() }}/imgs/top.png"></a></div>
		@endif
		@if (!Request::is('/'))
		<div id="legal">
		@else
		<div id="legal" class="center">
		@endif
			<p>Todos los derechos reservados, Santander Universidades 2013 
			@if (Request::is('ipad'))
			* Consulta <a href="{{ URL::action('HomeController@terminos') }}">t&eacute;rminos y condiciones</a>
			@endif
			</p>
		</div>
	</div>
	<script src="{{ Request::root() }}/js/jquery-1.10.2.min.map"></script>
	<script src="{{ Request::root() }}/js/jquery-1.10.2.min.js"></script>
	<script src="{{ Request::root() }}/js/less-1.4.1.min.js"></script>
	<script src="{{ Request::root() }}/js/jquery.prettyPhoto.js"></script>
	<script src="{{ Request::root() }}/js/main.js"></script>
</body>
</html>