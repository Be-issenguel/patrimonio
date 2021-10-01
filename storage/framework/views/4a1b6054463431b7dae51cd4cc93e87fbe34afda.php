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
                                        value="<?php echo e(old('motivo')); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor_final">Valor a atingir</label>
                                    <input type="number" min="0" class="form-control" name="valor_final"
                                        id="valor_final">
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
                                        value="<?php echo e(old('motivo')); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor_final1">Valor a atingir</label>
                                    <input type="number" min="0" class="form-control" name="valor_final"
                                        id="valor_final1" value="<?php echo e(old('valor_final')); ?>">
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
                                        value="<?php echo e(old('valor')); ?>">
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
<?php /**PATH C:\laragon\www\patrimonio\resources\views/includes/modals.blade.php ENDPATH**/ ?>