<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu - Aruna Bistro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>
<body class="bg-light py-5">
   <div class="container" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-headeer bg-warning text-dark fw-bold">
                Edit Menu
            </div>
            <div class="card-body">
                <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-input form-control" value="{{ $menu->nama_menu}}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Kategori</label>
                        <select name="kategori" class="form-select" required>
                            <option value="Makanan" {{ $menu->kategori == 'Makanan' ? 'selected' : '' }}>Makanan></option>
                            <option value="Minuman" {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>Minuman></option>
                            <option value="Cemilan" {{ $menu->kategori == 'Cemilan' ? 'selected' : '' }}>Cemilan></option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $menu->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Foto Menu Saat Ini</label>
                        <div class="mb-2">
                            <img src="{{ asset('images/' . $menu->foto) }}" width="120" class="img-thumbnail shadow-sm">
                        </div>
                        <label class="form-label text-muted" style="font-size: 14px;">Ganti foto baru:</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                        <a href="{{route('admin.menu.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning fw-bold">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>