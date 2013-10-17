$('#edit-tabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
$(".collapse").collapse()