$('#edit-tabs a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
});
$(".collapse").collapse();
$('.edit-form').hide();
$('.editar').on('click', function(e){
	var t, p, f;
	e.preventDefault();
	t = $(this).parent().parent().parent().parent();
	p = t.parent();
	f = p.find('.edit-form').eq(0);
	t.hide('fast');
	f.show('fast');
});
$('.cancelar').on('click', function(e){
	var t, p, f;
	e.preventDefault();
	f = $(this).parent().parent();
	p = f.parent();
	t = p.find('.thumbnail').eq(0);
	f.hide('fast');
	t.show('fast');
});