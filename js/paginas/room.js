$("#enviar-mensagem textarea").keyup(function() {
	// console.log($(this)[0].scrollHeight);

	$(this).css({height: 'auto'});

	novaAltura = ($(this)[0].scrollHeight);

	if (novaAltura>=176) {
		novaAltura = 176;
		overflow = 'auto';
	}
	else overflow = 'hidden';

	$(this).css({height: novaAltura, overflow: overflow});

	$("#mensagens").css('height', "calc(100% - 57px - "+novaAltura+"px)")
});