<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Bootstrap CSS from CDN -->
    <style>
        .menu-image {
            height: 200px;
            object-fit: cover;
        }

        .contact-form-container {
            max-width: 600px;
            margin: auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs .nav-link:hover {
            background-color: rgba(40, 167, 69, 0.2);
        }

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 1rem;
            text-align: center;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
        
    <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #DCDCDC">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/navbar_logo.png') }}" height="70" alt="logo">
            </a>
            <button class="navbar-toggler btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                    <ul class="nav nav-tabs me-4">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-success fw-bold" href="{{ route('dashboard') }}" role="tab">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('order') ? 'active' : '' }} text-success fw-bold" href="{{ route('order') }}" role="tab">Etalase</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-success fw-bold" href="{{ route('contact') }}" role="tab">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('cart.index') ? 'active' : '' }} text-success fw-bold" href="{{ route('cart.index') }}" role="tab">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('user.pesanan') ? 'active' : '' }} text-success fw-bold" href="{{ route('user.pesanan') }}" role="tab">Pesanan Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('history') ? 'active' : '' }} text-success fw-bold" href="{{ route('history') }}" role="tab">History</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link btn btn-success text-white px-4 ms-2 fw-bold" href="{{ route('login') }}" role="tab" style="border-radius: 20px; background-color: #28a745;">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </a>
                        </li>
                        @else
                        <div class="text-center me-4">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                        @endguest
                    </ul>
                    <div class="position-relative">
                        <input class="form-control rounded-pill pe-5 fw-bold" type="search" placeholder="Search" aria-label="Search">
                        <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y pe-3" style="font-size: 1rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Toko Kami</h5>
                        <p>Fruit3, Jl. Segar No. 123, Bandar Buah, 35141</p>
                        <p>Telepon: (0721) 123-456</p>
                        <p>Email: info@fruit3.id</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Ikuti Kami</h5>
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h5>Jam Operasional</h5>
                        <p>Senin - Jumat: 07.00 - 17.00 WIB</p>
                        <p>Sabtu - Minggu: 08.00 - 13.00 WIB</p>
                    </div>
                </div>
                <hr class="bg-light">
                <p class="mb-0">&copy;{{date('Y')}} GalProd</p>
            </div>
        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
