<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="utf-8">
	<title>Premio a la Innovaci&oacute;n Santander</title>
	<link rel="stylesheet" type="text/css" href="{{ Request::root() }}/css/normalize.css" />
	<link rel="stylesheet/less" type="text/css" href="{{ Request::root() }}/styles.less" />
	<link rel="stylesheet" href="{{ Request::root() }}/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
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
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ Request::root() }}/js/less-1.4.1.min.js" type="text/javascript"></script>
	<script src="{{ Request::root() }}/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="{{ Request::root() }}/js/main.js" type="text/javascript"></script>
</body>
</html>