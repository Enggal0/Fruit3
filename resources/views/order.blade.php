@extends('layouts.dashboard')

@section('content')
<!-- Order Tab -->
<div class="container tab-pane py-5" role="tabpanel" aria-labelledby="order-tab">
    <h2 class="text-success text-center mb-5">Etalase</h2>

    <!-- Display Menu Items -->
    <div class="row justify-content-center">
        @foreach($menus as $menu)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('storage/'.$menu->foto) }}" class="card-img-top menu-image rounded-top" alt="Menu Image" style="height: 180px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-success fw-bold">{{ $menu->nama }}</h5>
                        <p class="card-text text-muted small">{{ $menu->deskripsi }}</p>
                        <p class="text-success fw-bold">Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>
                        <style>
                            .card.h-100 {
                                max-width: 260px;
                                margin-left: auto;
                                margin-right: auto;
                            }
                            .menu-image {
                                height: 140px !important;
                            }
                            .card-title {
                                font-size: 1rem;
                            }
                            .card-text {
                                font-size: 0.9rem;
                            }
                            .btn {
                                font-size: 0.9rem;
                                padding: 0.4rem 1rem;
                            }
                            .form-control {
                                font-size: 0.9rem;
                                padding: 0.2rem 0.5rem;
                            }
                        </style>
                        <!-- Quantity Input -->
                        <label for="quantity-{{ $menu->id }}" class="form-label mt-auto">Jumlah:</label>
                        <input type="number" id="quantity-{{ $menu->id }}" name="quantity" value="1" min="1" class="form-control mb-2" style="width: 80px;">

                        <!-- Order Button -->
                        <a href="{{ route('cart.store') }}" class="btn btn-success mt-2"
                           onclick="event.preventDefault(); 
                           document.getElementById('add-to-cart-form-{{ $menu->id }}').submit();">
                           Tambah ke Keranjang
                        </a>

                        <!-- Hidden Form for Adding to Cart -->
                        <form id="add-to-cart-form-{{ $menu->id }}" action="{{ route('cart.store') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                            <input type="hidden" name="quantity" id="hidden-quantity-{{ $menu->id }}" value="1">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Script for Updating Hidden Quantity -->
<script>
    document.querySelectorAll('input[name="quantity"]').forEach(input => {
        input.addEventListener('input', function() {
            const menuId = this.id.split('-')[1];
            document.getElementById('hidden-quantity-' + menuId).value = this.value;
        });
    });
</script>
@endsection
