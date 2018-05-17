$('.toggle-nav').click(function() {
    $('#primary-nav ul').slideToggle();
});

$('#subForm').submit(function (e) {
	e.preventDefault();
	$.getJSON(
	this.action + "?callback=?",
	$(this).serialize(),
	function (data) {
		if (data.Status === 400) {
			$('#subResponse').text(data.Message).removeClass('success').addClass('error');
		} else { // 200
			$('#subResponse').text('Thanks, your address has been added!').removeClass('error').addClass('success');
		}
	});
});