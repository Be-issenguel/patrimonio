function editarDespesa(despesa) {
    $("#despesa-id").val(despesa.id);
    $("#designacao-despesa").val(despesa.designacao);
    $("#valor-despesa").val(despesa.valor);
}

$(function () {
    $('.modal-cadastro-despesa').magnificPopup({
        type: 'inline',
        preloader: false,
        modal: true
    });

    $('.modal-editar-despesa').magnificPopup({
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
