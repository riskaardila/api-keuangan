<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://tensaitech.id/">
            <img src="img/logo.png" alt="PT Tensai NSTeknologi" width="50" height="50">
        </a>

        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Dasboard' ? 'active' : '' }}" href="/dasboard">Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Uang Masuk' ? 'active' : '' }}" href="/uang-masuk">Uang
                            Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/uang-keluar">Uang
                            Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</nav>
