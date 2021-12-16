function editarDespesa(despesa) {
    $("#despesa-id").val(despesa.id);
    $("#designacao-despesa").val(despesa.designacao);
    $("#valor-despesa").val(despesa.valor);
}

$(function () {
    $('#btn-add-despesa').hide();

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

    $('.btn-add-despesa').on('click', function () {
        axios(base_url + 'ajax/rendimentos-poupancas')
            .then(response => {
                html = '';
                if (response.data.poupancas.length > 0) {
                    response.data.poupancas.forEach((poupanca) => {
                        html += `<option value="p.${poupanca.id}">${poupanca.motivo}</option>`
                    })
                }

                if (response.data.rendimentos.length > 0) {
                    response.data.rendimentos.forEach((rendimento) => {
                        html += `<option value="r.${rendimento.id}">${rendimento.tipo} - ${rendimento.mes}</option>`
                    });
                }

                if (html.length > 0) {
                    $("#rendimento-poupanca").html(html);
                    $('#btn-add-despesa').click();
                } else {
                    new PNotify({
                        title: 'Alerta!',
                        text: "Não existe poupança nem rendimento",
                        type: 'warning'
                    });
                }

            }).catch((error) => {
                console.log(error);
            })
    });

});
