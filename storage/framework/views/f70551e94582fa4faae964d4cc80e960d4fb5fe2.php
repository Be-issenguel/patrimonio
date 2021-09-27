<!-- Mensagens de erro para validação de formulários -->
<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            new PNotify({
                title: 'Erro!',
                text: "<?php echo e($message); ?>",
                type: 'error'
            });
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!-- Mensagem para qualquer acção bem sucedida -->
<?php if(session()->has('msg_success')): ?>
    <script>
        new PNotify({
            title: 'Sucesso!',
            text: "<?php echo e(session('msg_success')); ?>",
            type: 'success'
        });
    </script>
<?php endif; ?>
<?php /**PATH C:\laragon\www\patrimonio\resources\views/includes/alertas.blade.php ENDPATH**/ ?>