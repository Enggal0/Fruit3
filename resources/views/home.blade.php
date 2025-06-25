@extends('layouts.dashboard')

@section('content')
<!-- Halaman Beranda -->
 <body style="
        background: url('{{ asset('images/buah_banner.png') }}') no-repeat center center; 
        background-size: cover; 
        background-attachment: fixed;">
        
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
    <!-- Header -->
    <div class="text-center py-5" style="
        background-color: rgba(0, 0, 0, 0.6); 
        color: white; 
        width: 100%; 
        height: 680px; 
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;">
        <h1>#Fruit3SegarSetiapHari</h1>
    </div>

    <!-- Sambutan -->
    <div class="text-center py-5" style="background-color: #DCDCDC;">
        <h2 class="text-success">Selamat Datang di Fruit3</h2>
        <p class="container my-5">
            Fruit3 adalah platform toko buah online terpercaya yang menghadirkan buah-buahan segar langsung dari kebun terbaik ke rumah Anda. Kami berkomitmen untuk memberikan produk berkualitas, layanan cepat, dan pengalaman belanja yang nyaman bagi setiap pelanggan.
        </p>
    </div>

    <!-- Produk Unggulan -->
    <div class="text-center py-5" style="background-color: #f9f9f9">
        <div class="container my-5">
            <h3 class="text-success">Pilihan Buah Terbaik</h3><br>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/Pilihan Buah Terbaik.png') }}" alt="Buah Segar" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <p>Kami menyediakan berbagai jenis buah segar pilihan seperti apel, jeruk, pisang, semangka, dan buah tropis lainnya. Setiap produk dikemas dengan standar kebersihan dan kualitas tinggi, siap dikirim langsung ke pintu rumah Anda.</p>
                    <a href="{{ route('order') }}" class="btn btn-success">Belanja Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang Fruit3 -->
    <div class="text-center py-5" style="background-color: #DCDCDC;">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <h4 class="text-success font-weight-bold">Tentang Kami</h4>
                    <p>Fruit3 hadir sebagai solusi belanja buah modern untuk masyarakat urban yang membutuhkan kesegaran, kualitas, dan kepraktisan. Didukung oleh mitra petani lokal dan tim distribusi profesional, kami memastikan setiap pesanan tiba dalam kondisi terbaik.</p>
                </div>
                <div class="col-md-6">
                    <div id="fruitCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/Tentang Kami.png') }}" alt="Tentang Kami 1" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/Tentang Kami (2).png') }}" alt="Tentang Kami 2" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/Tentang Kami (3).png') }}" alt="Tentang Kami 3" class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#fruitCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#fruitCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
