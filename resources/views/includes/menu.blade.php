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
                        <a href="{{ route('home') }}">
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
                        <a href="{{ action('RendimentoController@index') }}">
                            <span class="pull-right label label-primary">{{ \App\Rendimento::count() }}</span>
                            <i class="fa fa-signal" aria-hidden="true"></i>
                            <span>Rendimentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('DespesaController@index') }}">
                            <span class="pull-right label label-primary">{{ \App\Despesa::count() }}</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>Despesas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PoupancaController@index') }}">
                            <span class="pull-right label label-primary">{{ \App\Poupanca::count() }}</span>
                            <i class="fa fa-piggy-bank" aria-hidden="true"></i>
                            <span>Poupanças</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</aside>
