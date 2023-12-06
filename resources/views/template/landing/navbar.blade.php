<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="{{ asset('template/assets/img/cpo-logo.png') }}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#bmi">BMI</a></li>
                <li class="nav-item"><a class="nav-link" href="#membership">Membership</a></li>
                <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-lg-inline text-yellow">Akun</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="dropdown-item">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Home</a>
                            @else
                                <a href="{{ route('login') }}" class="dropdown-item">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log in</a>
                                
                                <a href="{{ route('register') }}" class="dropdown-item">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Register</a>
                            @endauth
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>