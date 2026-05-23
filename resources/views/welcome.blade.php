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

<!-- tentang kami -->
<section id="profil" class="py-5" style="background-color: #faf9f6; display: block; clear: both;">
    <div class="container" style="padding-top: 48px; padding-bottom: 48px;">
        <div class="row align-items-center">

            <div class="col-md06 mb-4 mb-md-0">
                <img src="{{ asset('img/gambar1.jpg') }}" class="img-fluis rounded-4 shadow-sm" alt="Tentang Aruna Bistro">
            </div>

            <div class="col-md-6" style="padding-left: 20px;">
                <span class="text-warning fw-bold text-uppercase tracking-wider" style="font-size: 14px; letter-spacing: 1px;">Cerita Kami</span>
                <h2 class="fw-bold text-dark mt-2 mb-4" style="font-family: 'Playfair Display', serif;">Tentang Aruna Bistro Café</h2>

                <p class="text-muted" style="line-height: 1.8; margin-bottom: 15px;">
                    Diambil dari kata <strong>"Aruna"</strong> yang berarti hangatnya mentari dan indahnya langit senja, kami hadir sebagai ruang ketiga Anda untuk melepas penat. Lebih dari sekadar tempat makan atau <em>bistro</em> biasa, Aruna Bistro  adalah tempat di mana cita rasa bertemu dengan kenyamanan.
                </p>

                <p class="text-muted" style="line-height: 1.8; margin-bottom: 30px;">
                    Kami berkomitmen menyajikan racikan kopi pilihan, hidangan lezat penuh rasa, serta atmosfer yang hangat untuk menemani setiap cerita-cerita Anda.
                </p>

                <div class="row pt-3" style="border-top: 1px solid #dee2e6;">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <h5 class="fw-bold text-dark" style="font-size: 16px;">🌅 Suasana Hangat</h5>
                        <p class="text-muted" style="font-size: 13px; margin-bottom: 0;">Tempat santai yang pas untuk kumpul keluarga maupun mengerjakan tugas kuliah.</p>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="fw-bold text-dark" style="font-size: 16px;">🍽️ Menu Berkualitas</h5>
                        <p class="text-muted" style="font-size: 13px; margin-bottom:  0;">Dibuat dengan bahan segar pilihan untuk cita rasa terbaik.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end tentang kami -->

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
                    <img src="{{ asset('img/nasigoreng.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Makanan Berat">
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
                    <img src="{{ asset('img/himalaya.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Minuman">
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
                    <img src="{{ asset('img/croffle.jpg') }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Snack">
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

 <!-- end 3 favorit menu -->

 <!-- daftar menu -->
 <div id="menu" class="text-center my-5">
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
<!-- end daftar menu -->

 <!-- reservasi meja -->
  <div id="reservasi" class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-white text-dark p-5 shadow border-0 rounded-4" style="border: 1px solid #eee !important;">
                <div class="mb-3">
                    <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill small fw-semibold" style="border: 1px solid rgba(255,193,7,0.3);">
                        Pesan Meja Anda
                    </span>
                </div>

                <h2 class="fw-bold mb-2 text-dark" style="font-family: 'Playfair Display', serif;">Siapkan Ruang untuk Cerita Anda</h2>
                <p class="text-muted small mb-4">Silakan isi formulir di bawah ini untuk memesan tempat terbaik Anda di Aruna Bistro Café.</p>

                @if(session('sukses'))
                    <div class="alert alert-success alert-dismissible fade show border-0 my-3 p-3 shadow-sm" role="alert" style="background-color: #d1e7dd; color: #0f5132; rounded-3">
                        <div class="d-flex align-items-center gap-2">
                            <span>🎉</span>
                            <div>
                                <strong>Berhasil!</strong> {{session('sukses')}}
                            </div>
                        <div>
                        <button type="button" class="btn-close" data-bs-dismiss="allert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ url('/reservasi/simpan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control bg-white text-dark border-secondary-subtle py-2" placeholder="Nama Anda" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control bg-white text-dark border-secondary-subtle py-2" placeholder="Alamat Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="telepon" class="form-control bg-white text-dark border-secondary-subtle py-2" placeholder="Telepon" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="date" name="tanggal" class="form-control bg-white text-dark border-secondary-subtle py-2" required>
                        </div>
                        <div class="col-md-6">
                            <input type="time" name="jam" class="form-control bg-white text-dark border-secondary-subtle py-2" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <select name="jumlah_orang" class="form-select bg-white text-dark border-secondary-subtle py-2" required>
                                <option value="" selected disabled class="text-muted">Jumlah Orang</option>
                                <option value="1-2 Orang">1-2 Orang</option>
                                <option value="3-4 Orang">3-4 Orang</option>
                                <option value="5+ Orang">5+ Orang/Rombongan</option>
                            </select>
                        </div>
                        <div>
                            <select name="pilih_acara" class="form-select bg-white text-dark border-secondary-subtle py-2">
                                <option value="" selected disabled class="text-muted">Pilih Acara</option>
                                <option value="Makan Biasa">Makan Malam Biasa</option>
                                <option value="Ulang Tahun">Ulang Tahun</option>
                                <option value="Pertemuan Bisnis">Pertemuan Bisnis</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <textarea name="catatan" class="form-control bg-white text-dark border-secondary-subtle py-2" rows="3" placeholder="Permintaan khusus atau catatan tambahan (opsional)"></textarea>
                        </div>

                        <div class="d-gird mb-3">
                            <button type="submit" class="btn text-dark fw-bold py-3 rounded-pill shadow-sm" style="background-color: #e69543; border: none;">
                                Konfirmasi Reservasi &rarr;
                            </button>
                        </div>

                        <div class="text-muted small d-flex align-items-center gap-2">
                            <span class="text-warning">🛡️</span> Pembatalan gratis hingga 24 jam sebelumnya
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection