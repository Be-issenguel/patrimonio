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
                                    <input type="number" min="0" class="form-control" name="valor" id="valor">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Mês</label>
                                    <select name="mes" id="mes" class="form-control">
                                        <option value="JANEIRO">JANEIRO</option>
                                        <option value="FEVEREIRO">FEVEREIRO</option>
                                        <option value="MARÇO">MARÇO</option>
                                        <option value="ABRIL">ABRIL</option>
                                        <option value="MAIO">MAIO</option>
                                        <option value="JUNHO">JUNHO</option>
                                        <option value="JULHO">JULHO</option>
                                        <option value="AGOSTO">AGOSTO</option>
                                        <option value="SETEMBRO">SETEMBRO</option>
                                        <option value="OUTUBRO">OUTUBRO</option>
                                        <option value="NOVEMBRO">NOVEMBRO</option>
                                        <option value="DEZEMBRO">DEZEMBRO</option>
                                    </select>
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
            <h2 class="panel-title">Novo Rendimento</h2>
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
                                        <option value="NEGÓCIO">NEGÓCIO</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Montante</label>
                                    <input type="number" min="0" class="form-control" name="valor" id="valor">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="valor">Mês</label>
                                    <select name="mes" id="mes" class="form-control">
                                        <option value="JANEIRO">JANEIRO</option>
                                        <option value="FEVEREIRO">FEVEREIRO</option>
                                        <option value="MARÇO">MARÇO</option>
                                        <option value="ABRIL">ABRIL</option>
                                        <option value="MAIO">MAIO</option>
                                        <option value="JUNHO">JUNHO</option>
                                        <option value="JULHO">JULHO</option>
                                        <option value="AGOSTO">AGOSTO</option>
                                        <option value="SETEMBRO">SETEMBRO</option>
                                        <option value="OUTUBRO">OUTUBRO</option>
                                        <option value="NOVEMBRO">NOVEMBRO</option>
                                        <option value="DEZEMBRO">DEZEMBRO</option>
                                    </select>
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
<?php /**PATH C:\laragon\www\patrimonio\resources\views/includes/modals.blade.php ENDPATH**/ ?>