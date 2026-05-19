@extends('layout.app')

@section('content')
<div class="container my-5 py-5">
        <div class="row align-items-center">

            <div class="col-md-6 pe-md-4 text-start">
                <span class="badge bg-secondary mb-3 text-uppercase px-3 py-2" style="letter-spacing: 1.px; font-size: 12px">
                    Reservasi & Dine-In
                </span>
                <h1 class="display-4 fw-bold mb-3 text-dark" style="font-family: 'Playfair Display', serif; font-size:52px ; line-height :1.2px">
                    Aruna Bistro Café
                </h1>
                <h2 class="text-muted fw-normal mb-4" style="font-size: 24px; font-style: italic">
                    Seduh Cerita, Nikmati Cita Rasa.
                </h2>

                <p class="text-secondary mb-4" style="line-height: 28px; font-size: 17px;">
                Selamat datang di tempat di mana aroma kopi pilihan bertemu dengan kehangatan hidangan kuliner otentik. Kami menyajikan ruang nyaman untuk bersantai di setiap cangkir dan piring yang kami sajikan.
                </p>

                <div class="mb-4 d-flex align-items-center gap-2 text-secondary" style="font-size: 16px;">
                    <i class="bi bi-clock text-warning" style="font-size: 20px;"></i>
                    <span><strong>Jam Operasional:</strong>10.00 - 22.00 WIB</span>
                </div>

                <div class="d-flex gap-3">
                    <a href="#reservasi" class="btn btn-dark px-4 py-2 text-uppercase fw-semibold" style="letter-spacing: 1px; font-size: 14px">Booking Tempat</a>
                    <a href="/menu" class="btn btn-outline-dark px-4 py-2 text-uppercase fw-semibold" style="letter-spacing: 1px; font-size: 14px">Lihat Menu</a>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 text-center">
                    <div class="position-relevative oferflow-hidden rounded-3 shadow-lg">
                        <img src="{{ asset('img/gambar1.jpg') }}" class="img-fluid w-100" alt="Suasana Aruna Bistro Cafe">
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection