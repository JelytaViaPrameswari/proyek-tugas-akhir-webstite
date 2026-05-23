@extends('layout.app')

@section('content')
<div class="p-5 text-start" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/gambar2.jpg') }}'); background-size: cover; backgroung-positio: center; height: 600px; display: flex; align-items: center; justify-content: center; color: white;">
    <div class="container">

        <span class="badge bg-light text-dark mb-3 text-uppercase px-3 py-2" style="letter-spacing: 1px; font-size: 12px; font-weight: 600px;">
            Reservasi & Dine-In
        </span>

        <h1 class="display-3 fw-bold mb-2 text-white" style="font-family: 'Playfair Display', serif; font-size: 64px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
            Aruna Bistro Café
        </h1>
        <h2 class="fw-normal mb-4 text-light" style="font-size: 26px; font-style: italic; opacity:0,9;">
            "Seduh Cerita, Nikmati Cita Rasa."
        </h2>

        <p class="mb-4 text-white-50" style="line-height: 28px; font-size: 18px; max-width: 700px;">
            Selamat datang di tempat aroma kopi pilihan bertemu dengan kehangatan hidangan kuliner autentik. Kami menyajikan ruang nyaman untuk bersantai sekaligus kehangatan di setiap cangkir dan piring yang kami sajikan.
        </p>

        <div class="mb-4 d-flex align-items-center justify-content-start gap-2 text-warning" style="font-size: 16px;">
            <i class="bi bi-clock" style="font-size: 20px;"></i>
            <span class="text-white"><strong>Jam Operasional:</strong> 10.00 - 22.00 WIB</span>
        </div>

        <div class="d-flex justify-content-start gap-3">
            <a href="#reservasi" class="btn btn-warning px-4 py-2.5 text-uppercase fw-bold text-dark" style="letter-spacing: 1px; font-size: 14px;">
                Booking Tempat
            </a>
            <a href="/menu" class="btn btn-outline-light px-4 py-2.5 text-uppercase fw-semibbold" style="letter-spacing: 1px; font-size: 14px;">
                Lihat Menu
            </a>
        </div>
    </div>
</div>

<!-- 3 menu bestseller -->
 <div class="container my-5 py-4">
    <div class="text-center mb-5">
        <span class="text-warning fw-bold text-uppercase" style="letter-spacing: 2px; font-size: 14px;">Menu Terfaforit</span>
        <h2 class="fw-bold mt-1" style="font-family: 'Playfair Display', serif; font-size: 36px;">Our Best Seller</h2>
        <div class="mx-auto bg-warning mt-2" style="width: 600px; height: 3px; rounded: 2px;"></div>
    </div>

    <div class="row g-4 justify-content-center">

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                <div style="height: 240px; overflow: hidden;">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Makanan Berat">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-danger-subtle text-danger mb-4 px-3 py-1 text-uppercase" style="font-size: 11px; font-weight: 600:">Makanan Berat</span>
                    <h5 class="card-tittle fw-bold text-dark mb-2">Nasi Goreng Spesial</h5>
                    <p class="card-tect text-secondary mb-3" style="font-size: 14px; line-height: 22px;">
                        Sepiring nasi goreng spesial yang menggugah selera dengan taburan suwiran ayam, udang, potongan bakso, dan hiasan telur ceplok di atasnya, disajikan lengkap dengan acar segar dan kerupuk.
                    </p>
                    <div class="fw-bold text-warning fs-5">Rp 25.000</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                <div style="height: 240px; overflow: hidden;">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Minuman">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-primary-subtle text-primary mb-2 px-3 py-1 text-uppercase" style="font-size: 11px; font-weight: 600:">Minuman</span>
                    <h5 class="card-tittle fw-bold text-dark mb-2">Kopi Himalayan Butterscotch</h5>
                    <p class="card-tect text-secondary mb-3" style="font-size: 14px; line-height: 22px;">
                        Minuman ini memadukan kopi susu, sirup butterscotch yang manis dan gurih, serta sentuhan akhir berupa krim Himalayan sea salt yang creamy dan buttery.
                    </p>
                    <div class="fw-bold text-warning fs-5">Rp 20.000</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                <div style="height: 240px; overflow: hidden;">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Snack">
                </div>
                <div class="card-body p-4 text-center">
                    <span class="badge bg-success-subtle text-danger-emphasis mb-2 px-3 py-1 text-uppercase" style="font-size: 11px; font-weight: 600:">Cemilan</span>
                    <h5 class="card-tittle fw-bold text-dark mb-2">Croffle</h5>
                    <p class="card-tect text-secondary mb-3" style="font-size: 14px; line-height: 22px;">
                        Gabungan dari croissant dan waffle. Adonan croissant dimasak menggunakan cetakan waffle, menghasilkan kue dengan bentuk kotak-kotak yang renyah di luar namun tetap lembut di dalam.
                    </p>
                    <div class="fw-bold text-warning fs-5">Rp 18.000</div>
                </div>
            </div>
        </div>
    </div>
 </div>

 <div class="text-center my-5">
    <h2 class="fw-bold text-dark">Semua Menu Kafe</h2>
    <p class="text-muted">Daftar menu lengkap dari Aruna Bistro</p>
 </div> 
 <div class="row g-4 justify-content-center mb-5">
    @foreach($semuaMenu as $item)
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
            <div style="height: 240px; overflow: hidden;">
                <img src="{{ asset('images/' . $item->foto) }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="{{ $item->nama_menu }}">
            </div>
            <div class="card-body p-4 text-center">
                <span class="badge bg-success-subtle text-success mb-2 px-3 py-1 text-uppercase" style="font-size: 11px; font-weight: 600;">
                    {{ $item->kategori }}
                </span>
                <h5 class="card-title fw-bold text-dark mb-2">{{ $item->nama_menu }}</h5>
                <div class="fw-bold text-warning fs-5">
                    Rp {{ number_format($item->harga, 0,',', '.' )}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
 </div>
@endsection