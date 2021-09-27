function editar(poupanca) {
    console.log(poupanca);
    $(".modal-cadastro").modal()
}

$(function () {
    $('.modal-cadastro').magnificPopup({
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

}).apply(this, [jQuery]);
