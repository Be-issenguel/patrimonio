function editar(poupanca) {
    $("#id").val(poupanca.id)
    $("#motivo1").val(poupanca.motivo)
    $("#valor_final1").val(poupanca.valor_final)
}

function creditar(poupanca) {
    $("#id1").val(poupanca.id)
}

$(function () {
    $('.modal-cadastro').magnificPopup({
        type: 'inline',
        preloader: false,
        modal: true
    });

    $('.modal-editar').magnificPopup({
        type: 'inline',
        preloader: false,
        modal: true
    });

    $('.modal-creditar').magnificPopup({
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
