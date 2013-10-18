var Globals = {
	path: window.location.protocol+"//"+window.location.hostname+window.location.pathname,
	base: 'http://b3app.me/innovacion/'
}
$(document).on('ready', function(){
    $("a[rel^='imgSlide']").prettyPhoto({
        theme: 'dark_rounded',
        deeplinking: false,
        social_tools: ''
    });
    $("a[rel^='vidSlide']").prettyPhoto({
        theme: 'dark_rounded',
        deeplinking: false,
        social_tools: ''
    });
    $("a[rel^='linkSlide']").prettyPhoto({
        theme: 'dark_rounded',
        deeplinking: false,
        social_tools: ''
    });
    if($('#file_url')){
    	if($('#file_url').hasClass('download')) location.href = $('#file_url').attr('href');
		else $('#file_url').trigger('click');    
    }
    $('.fb-share').on('click', function( e ){
    	e.preventDefault();
    	fbPublish( $(this).attr('href') );
    });
    $('.tw-share').on('click', function( e ){
    	e.preventDefault();
    	twPublish( $(this).attr('href') );
    });
	$('#facebook-like').on('click', function( e ){
		e.preventDefault();
		FB.login(function(response) {
   			if (response.authResponse) {
     			FB.api('/me/likes', { limit: 250 }, function(response) {
     				likeMe = false;
     				$.each(response.data, function(index, value){
     					if(value.id == '151897861495761') likeMe = true;
     				});
     				if(likeMe) top.location.href = $('#facebook-like').attr('href');
     				else top.location.href = 'http://facebook.com/151897861495761';
     			});
   			}
		}, {scope:'email, user_likes'});
	});
    $('#opt-equipo').on('click', function(e){
        e.preventDefault();
        FB.ui({
            method: 'apprequests',
            message: 'Únete a mi equipo Santander'
        });
    });
    $('#filtro').on('click','a', function(e){
        e.preventDefault();
        var li = $(this).parent();
        if( li.hasClass('active') ){
            li.removeClass('active');
        }else{
            li.addClass('active');
        }
        getFeed();
    });

    $('#faq ol .answer').hide();
    $('#faq ol .question').on('click', function(e){
        $('#faq ol .question').removeClass('active');
        $(this).addClass('active');
        showAnswer( $(this).index() );
    });
    showAnswer(0);

    function showAnswer( index ){
        $('#faq ol .answer').hide('slow');
        $('#faq ol .answer').eq(index/2).show('slow');
    }
    function getFeed(){
    	var subcat;
    	$('#filtro li').each(function(index){
    		subcat = $(this).children().data('id');
    		if($(this).hasClass('active')){
	    		$('.'+subcat).show('slow');
    		}else{
	    		$('.'+subcat).hide('slow');
    		}
    	});
    }
    /*
    function getFeed(){
        subcats = new Array();
        subs = $('#filtro').find('li.active');
        subs.each(function(i, el){
            subcats.push($(el).children().data('id'));
        });
        $('.grid').empty();
        $.post('./feed',{subcats:subcats.toString()}, function(response){
            $(response).each(function(i, el){
                var elem = $('<div />', {class:'element'}),
                    thumb = $('<div />', {class:'thumb'}),
                    a = $('<a />');
                    overlay = $('<div />', {class:'overlay'}),
                    img = $('<img />', {src:'previews/'+el.imgArch}),
                    iconos = $('<div />', {class:'iconos'}),
                    fbShare = $('<a />', {class:'fb-share', href:'./inspiracion/'+el.id}).append('<img src="imgs/facebook-icon.png" />');
                    twShare = $('<a />', {class:'tw-share', href:'./inspiracion/'+el.id}).append('<img src="imgs/twitter-icon.png" />');
                    h1 = $('<h1 />', {text:el.nomArch});
                    p = $('<p />', {text:el.descArch});
                switch(el.tarch_id){
                    case '1':
                    elem.addClass('imagen');
                    a.attr({'href':'uploads/'+el.linkArch, 'rel':'prettyPhoto'});
                    break;
                    case '2':
                    elem.addClass('video');
                    a.attr({'href':el.linkArch, 'rel':'prettyPhoto'});
                    break;
                    case '3':
                    elem.addClass('descargar');
                    a.attr({'href':'download/'+el.linkArch});
                    break;
                    case '4':
                    elem.addClass('enlace');
                    a.attr({'href': el.linkArch, 'target':'_blank'});
                    break;
                }
                a.append(overlay);
                a.append(img);
                iconos.append(fbShare);
                iconos.append(twShare);
                thumb.append(a);
                thumb.append(iconos)
                elem.append(thumb);
                elem.append(h1);
                elem.append(p);
                $('.grid').append(elem);
            });
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'dark_rounded',
                deeplinking: true,
                social_tools: ''
            });
        });
    }
    */
    function fbPublish(href){
    	console.log(Globals.base+href);
    	window.open('http://www.facebook.com/sharer.php?u='+href, 'Compartir en Facebook', 'width=692, height=330');
	}
	function twPublish(href){
		window.open('https://twitter.com/share?url='+href, 'Compartir en Twitter', 'width=692, height=330');
	}
});