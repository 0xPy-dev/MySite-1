$('.js-validate').submit(function () {
	var form = $(this);
	var field = [];
	form.find('input[data-validate]');
	var value = $(this).val(),
		line = $(this).closest('.some-form_line');
	for (var i=0; i<field.length; i++) {
		if (!value) {
			line.addClass('some-form_line-required');
			setTimeout(function() {
				line.removeClass('some-form_line-required');
			}.bind(this), 2000)
		}
	}
});
