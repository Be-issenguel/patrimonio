
<?php $__env->startSection('conteudo'); ?>
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastroDespesa" class="modal-cadastro-despesa fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Despesas</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Designacao</th>
                        <th>Montante</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $despesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="gradeX">
                            <td><?php echo e($despesa->designacao); ?></td>
                            <td><?php echo e(number_format($despesa->valor, 2, ',', '.')); ?></td>
                            <td><?php echo e(explode(' ', $despesa->created_at)[0]); ?></td>
                            <td>
                                <a href="#modalEditarRendimento"
                                    onclick="event.preventDefault(); editarRendimento(<?php echo e($despesa); ?>)"
                                    class="modal-editar-rendimento text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\patrimonio\resources\views/despesa/index.blade.php ENDPATH**/ ?>