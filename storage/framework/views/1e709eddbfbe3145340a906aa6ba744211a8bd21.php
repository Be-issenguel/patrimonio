
<?php $__env->startSection('conteudo'); ?>
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#modalCadastro" class="modal-cadastro fa fa-plus text-primary"></a>
            </div>

            <h2 class="panel-title">Lista de Poupanças</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Motivo</th>
                        <th>Valor</th>
                        <th>Objetivo</th>
                        <th class="hidden-phone">Progresso</th>
                        <th>Data de Início</th>
                        <th>Última Actualização</th>
                        <th>Status</th>
                        <th>Movimentos</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $poupancas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poupanca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="gradeX">
                            <td><?php echo e($poupanca->motivo); ?></td>
                            <td><?php echo e(number_format($poupanca->valor_atual, 2, ',', '.')); ?></td>
                            <td><?php echo e(number_format($poupanca->valor_final, 2, ',', '.')); ?></td>
                            <td>
                                <div
                                    class=" progress progress-sm
                                progress-half-rounded m-none mt-xs light">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width:<?php echo e(floor(($poupanca->valor_atual * 100) / $poupanca->valor_final)); ?>%;">
                                        <?php echo e(floor(($poupanca->valor_atual * 100) / $poupanca->valor_final)); ?>%
                                    </div>
                                </div>
                            </td>
                            <td><?php echo e($poupanca->created_at); ?></td>
                            <td><?php echo e($poupanca->updated_at); ?></td>
                            <td class="center">
                                <?php if($poupanca->status == 'finalizada'): ?>
                                    <span class="label label-success">finalizada</span>
                                <?php else: ?>
                                    <span class="label label-warning">em progresso</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($poupanca->despesas->count()); ?></td>
                            <td>
                                <?php if($poupanca->status == 'progresso'): ?>
                                    <a href="#modalCreditar" onclick="event.preventDefault(); creditar(<?php echo e($poupanca); ?>)"
                                        class="modal-creditar text-success"><i class=" fa fa-piggy-bank"></i></a>
                                <?php endif; ?>

                                <a href="#modalEditar" onclick="event.preventDefault(); editar(<?php echo e($poupanca); ?>)"
                                    class="modal-editar text-primary"><i class=" fa fa-edit"></i></a>
                                <a href="" class="text-danger"><i class=" fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\patrimonio\resources\views/poupanca/index.blade.php ENDPATH**/ ?>