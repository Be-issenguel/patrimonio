
<?php $__env->startSection('conteudo'); ?>
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastroRendimento" class="modal-cadastro-rendimento fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Rendimentos</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Montante</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $rendimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rendimento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="gradeX">
                            <td><?php echo e($rendimento->tipo); ?></td>
                            <td><?php echo e(number_format($rendimento->montante, 2, ',', '.')); ?></td>
                            <td><?php echo e($rendimento->created_at); ?></td>
                            <td>
                                <a href="#modalCreditar" onclick="event.preventDefault(); creditar(<?php echo e($rendimento); ?>)"
                                    class="modal-creditar text-success"><i class=" fa fa-money"></i></a>
                                <a href="#modalEditar" onclick="event.preventDefault(); editar(<?php echo e($rendimento); ?>)"
                                    class="modal-editar text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\patrimonio\resources\views/rendimento/index.blade.php ENDPATH**/ ?>