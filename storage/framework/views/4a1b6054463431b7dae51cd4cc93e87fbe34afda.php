<!-- Modal  para cadastro de poupança -->
<div id="modalCadastro" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Nova Poupança</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('PoupancaController@store')); ?>" method="post" id="form-poupanca">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="motivo">Motivo</label>
                                    <input type="text" class="form-control" name="motivo" id="motivo"
                                        value="<?php echo e(old('motivo')); ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor_final">Valor a atingir</label>
                                    <input type="number" min="0" class="form-control" name="valor_final"
                                        id="valor_final" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-poupanca').submit()">Cadastrar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal para editação de poupança -->
<div id="modalEditar" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Editar Poupança</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('PoupancaController@update')); ?>" method="post" id="form-poupanca">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="motivo1">Motivo</label>
                                    <input type="text" class="form-control" name="motivo" id="motivo1"
                                        value="<?php echo e(old('motivo')); ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor_final1">Valor a atingir</label>
                                    <input type="number" min="0" class="form-control" name="valor_final"
                                        id="valor_final1" value="<?php echo e(old('valor_final')); ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-poupanca').submit()">Editar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal para creditar poupança -->
<div id="modalCreditar" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Creditar Poupança</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('PoupancaController@creditar')); ?>" method="post" id="form-poupanca">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="id1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="valor">Valor</label>
                                    <input type="number" min="0" class="form-control" name="valor" id="valor"
                                        value="<?php echo e(old('valor')); ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-poupanca').submit()">Careditar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal  para cadastro de rendimento -->
<div id="modalCadastroRendimento" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Novo Rendimento</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('RendimentoController@store')); ?>" method="post" id="form-rendimento">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="motivo">Tipo</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="SALARIAL">SALARIAL</option>
                                        <option value="PRESTAÇÃO DE SERVIÇOS">PRESTAÇÃO DE SERVIÇOS</option>
                                        <option value="NEGÓCIO">NEGÓCIO</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Montante</label>
                                    <input type="number" min="0" class="form-control" name="valor" id="valor"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Mês</label>
                                    <input type="date" name="mes" id="mes" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-rendimento').submit()">Cadastrar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal  para edição de rendimento -->
<div id="modalEditarRendimento" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edição de Rendimento</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('RendimentoController@update')); ?>" method="post"
                        id="form-editar-rendimento">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="rendimento_id" id="rendimento-id" value="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="motivo">Tipo</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="SALARIAL">SALARIAL</option>
                                        <option value="PRESTAÇÃO DE SERVIÇOS">PRESTAÇÃO DE SERVIÇOS</option>
                                        <option value="LUCRO DE NEGÓCIO">LUCRO DE NEGÓCIO</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor-rendimento">Montante</label>
                                    <input type="number" min="0" class="form-control" name="valor"
                                        id="valor-rendimento" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Mês</label>
                                    <input type="date" name="mes" id="mes" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-editar-rendimento').submit()">Cadastrar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal  para cadastro de despesas -->
<div id="modalCadastroDespesa" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Nova Despesa</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('DespesaController@store')); ?>" method="post" id="form-despesa">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="valor">Rendimento ou Poupança</label>
                                    <select type="text" name="rendimento_poupanca" id="rendimento-poupanca"
                                        class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Designação</label>
                                    <input type="text" name="designacao" id="designacao" class="form-control"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Montante</label>
                                    <input type="number" min="0" class="form-control" name="valor" id="valor"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-despesa').submit()">Cadastrar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal  para edição de despesas -->
<div id="modalEditarDespesa" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edição de Despesa</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <form action="<?php echo e(action('DespesaController@update')); ?>" method="post" id="form-editar-despesa">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="despesa_id" id="despesa-id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designacao-despesa">Designação</label>
                                    <input type="text" name="designacao" id="designacao-despesa" value=""
                                        class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor-despesa">Montante</label>
                                    <input type="number" min="0" class="form-control" name="valor" id="valor-despesa"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary"
                        onclick="document.getElementById('form-editar-despesa').submit()">Editar</button>
                    <button class="btn btn-default modal-dismiss">Cancelar</button>
                </div>
            </div>
        </footer>
    </section>
</div>
<?php /**PATH C:\laragon\www\patrimonio\resources\views/includes/modals.blade.php ENDPATH**/ ?>