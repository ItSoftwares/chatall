$("#ir-cadastro").click(function() {
	$("#login").fadeOut('slow', function() {
		$("#cadastro").fadeIn('slow');
	})
});

$("#ir-login").click(function() {
	$("#cadastro").fadeOut('slow', function() {
		$("#login").fadeIn('slow');
	})
});