{{-- navbar mobile --}}
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


{{-- navbar web --}}
<header class="site-navbar py-4" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="index.html">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" style="max-height: 40px">
                    <span>Finance Tensai</span>
                </a>
            </div>
            <div class="ml-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="{{ (request()->is('/') ? 'active' : '') }}"><a href="/" class="nav-link">Home</a></li>
                        <li class="{{ (request()->is('uang-masuk') ? 'active' : '') }}"><a href="/uang-masuk" class="nav-link">Uang Masuk</a></li>
                        <li class="{{ (request()->is('uang-keluar') ? 'active' : '') }}"><a href="/uang-keluar" class="nav-link">Uang Keluar</a></li>
                    </ul>
                </nav>

                <a href="#"
                    class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                        class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>

</header>