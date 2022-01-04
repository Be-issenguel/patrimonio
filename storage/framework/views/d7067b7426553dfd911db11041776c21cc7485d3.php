
<?php $__env->startSection('conteudo'); ?>
    <section class="panel">
        <header class="panel-heading">
            <h1>Total: <?php echo e(number_format($despesas->sum('valor'), 2, ',', '.')); ?> KZ</h1>
            <h2 class="panel-title">Despesas sobre o rendimento <?php echo e($rendimento->tipo); ?> refente a data
                <?php echo e($rendimento->mes); ?></h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Designação</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $despesas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $despesa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="gradeX">
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($despesa->designacao); ?></td>
                            <td><?php echo e(number_format($despesa->valor, 2, ',', '.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\patrimonio\resources\views/rendimento/despesas.blade.php ENDPATH**/ ?>