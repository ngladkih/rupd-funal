$('.accordion').dcAccordion();
$('.list-container select').on('change', function(){
	var theme = $(this);
	var type = null;
	if(theme.attr('id') == 'laboratory-theme_id'){
		type = 'lab';
	}
	if(theme.attr('id') == 'lectures-theme_id'){
		type = 'lect';
	}
	if(theme.attr('id') == 'practical-theme_id'){
		type = 'pract';
	}
	if(theme.attr('id') == 'independent-theme_id'){
		type = 'iw';
	}
	$.ajax({
		url: theme.data('route'),
		type: 'POST',
		data: {themeId: theme.val(), type: type},
		success: function(data){
			$('.hours').html('Доступно часов ' + data);
			if(data == 0){
				$('button').attr('disabled', 'disabled');
			}else if (data > 0){
				$('button').removeAttr('disabled');
			}
		},
		error: function(){
			alert('Error')
		}
	});
});
/*--------------------------------------*/

