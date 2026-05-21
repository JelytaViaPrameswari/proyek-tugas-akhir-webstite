<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu Baru - Aruna Bistro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>
<body>
   
    <div class="container mt-4" style="max-width: 600px;">
        <h2>Tambah Menu Baru</h2>
        <!-- <p class="text-muted">Input menu baru.</p> -->
        <hr>

        <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_menu" class="form-label fw-bold">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Contoh: Americano" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label fw-bold">Kategori</label>
                <select class="form-select" id="kategori" name="kategori" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Cemilan">Cemilan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga (Rp)</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 10000" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Foto Menu</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Simpan Menu</button>
                <a href="{{ route('admin.menu.index') }}" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>