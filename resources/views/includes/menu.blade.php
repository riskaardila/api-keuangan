<div class="hero overlay" style="background-image: url({{ asset('img/pic.jpg') }});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ml-auto">
                <h1 class="text-white">Financial Problems Detected</h1>
                <p>Selamat Datang di Finance Tensai</p>
                <p>
                    @guest
                    <a href="{{ route('register') }}" class="btn btn-primary py-3 px-4 mr-3">Pendaftaran</a>
                    <a href="{{ route('login') }}" class="more light">Masuk</a>
                    @endguest
                </p>
            </div>
        </div>
    </div>
</div>