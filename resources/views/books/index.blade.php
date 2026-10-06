<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku - Perpustakaan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        a, button {
            text-decoration: none;
            cursor: pointer;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 6px;
            border: none;
            color: white;
            display: inline-block;
        }

        .btn-primary {
            background: #2563eb;
        }

        .btn-warning {
            background: #f59e0b;
        }

        .btn-danger {
            background: #dc2626;
        }

        .btn-info {
            background: #0891b2;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #1e3a8a;
            color: white;
        }

        .actions {
            display: flex;
            gap: 6px;
            align-items: center;
        }

        .actions .btn {
             width: 75px;
            height: 42px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            font-size: 15px;
            border-radius: 6px;
        }

.actions form {
    margin: 0;
    padding: 0;
}
    </style>
</head>

<body>

<div class="container">

    <div class="top">
        <h1>📚 Daftar Buku</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">
            + Tambah Buku
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->category->name }}</td>

                    <td>
                        <div class="actions">

                            <a href="{{ route('books.show', $book) }}"
                               class="btn btn-info">
                                Detail
                            </a>

                            <a href="{{ route('books.edit', $book) }}"
                               class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('books.destroy', $book) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="8" style="text-align:center;">
                        Belum ada data buku.
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>