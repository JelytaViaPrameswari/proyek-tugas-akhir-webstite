<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Aruna Bistro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>
<body>
    <div class="container mt-4">
        <h2>Manajemen Menu Cafe</h2>

        <a href="{{ route('admin.menu.create') }}" class="btn btn-primary mb-3">Tambah Menu</a>

        <table class="table tablle-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semuaMenu as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>

                    <td>
                        <img src="{{ asset('images/' . $item->foto) }}" alt="Foto Menu" style="width: 70px; height: auoto; border-radius: 4px;">
                    </td>

                    <td>{{ $item->nama_menu}}</td>
                    <td>{{ $item->kategori}}</td>
                    <td>{{ number_format($item->harga, 0, ',', '.')}}</td>
                    <td>
                        <a href="{{ route('admin.menu.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.menu.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>