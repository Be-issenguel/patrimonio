<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title text-center">
            <h4 style="color: white">Patrimônio</h4>
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
            data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="<?php echo e(route('home')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="pull-right label label-primary">up coming</span>
                            <i class="fa fa-exchange-alt" aria-hidden="true"></i>
                            <span>Investimentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(action('RendimentoController@index')); ?>">
                            <span class="pull-right label label-primary"><?php echo e(\App\Rendimento::count()); ?></span>
                            <i class="fa fa-signal" aria-hidden="true"></i>
                            <span>Rendimentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(action('DespesaController@index')); ?>">
                            <span class="pull-right label label-primary"><?php echo e(\App\Despesa::count()); ?></span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>Despesas</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(action('PoupancaController@index')); ?>">
                            <span class="pull-right label label-primary"><?php echo e(\App\Poupanca::count()); ?></span>
                            <i class="fa fa-piggy-bank" aria-hidden="true"></i>
                            <span>Poupanças</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</aside>
<?php /**PATH C:\laragon\www\patrimonio\resources\views/includes/menu.blade.php ENDPATH**/ ?>