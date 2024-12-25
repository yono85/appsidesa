<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ asset('adminlte/index3.html') }}" class="navbar-brand">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sidesa</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <a href="/mail" class="nav-link">Kotak Surat</a>
            </li>

            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>