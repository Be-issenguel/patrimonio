function editar(rendimento) {

}

$(function () {
    $('.modal-cadastro-rendimento').magnificPopup({
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
