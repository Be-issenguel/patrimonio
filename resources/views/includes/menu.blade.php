<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
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
                        <a href="index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="pull-right label label-primary">182</span>
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            <span>Investimentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('PoupancaController@index') }}">
                            <span class="pull-right label label-primary">182</span>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>Poupanças</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</aside>
