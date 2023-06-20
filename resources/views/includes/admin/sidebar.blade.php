<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                <img alt="image" src="{{ asset('img/logo.png') }}" style="max-height: 50px"
                    class="header-logo" />
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ (request()->is('dashboard') ? 'active' : '') }}">
                <a href="/dashboard" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            
            <li class="{{ (request()->is('uang-masuk') ? 'active' : '') }}">
                <a href="/uangmasuk" class="nav-link"><i class="fas fa-medal"></i>
                    <span>Uang Masuk</span></a>
            </li>

            <li class="{{ (request()->is('uang-keluar') ? 'active' : '') }}">
                <a href="/uang-keluar" class="nav-link"><i class="fas fa-user-check"></i>
                    <span>Uang Keluar</span></a>
            </li>
        </ul>

        <div class="mt-3 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-danger btn-lg btn-block btn-icon-split" data-toggle="modal"
                data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
        </div>
    </aside>
</div>
