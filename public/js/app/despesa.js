function editarRendimento(rendimento) {
    $("#rendimento-id").val(rendimento.id)
    $("#valor").val(rendimento.valor)
}

$(function () {
    $('.modal-cadastro-despesa').magnificPopup({
        type: 'inline',
        preloader: false,
        modal: true
    });

    $('.modal-editar-rendimento').magnificPopup({
        type: 'inline',
        preloader: false,
        modal: true
    });


    /*
	Modal Dismiss
	*/
    $('.modal-dismiss').on('click', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

});
