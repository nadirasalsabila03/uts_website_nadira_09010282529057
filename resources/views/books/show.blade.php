<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - Perpustakaan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #222;
        }

        .navbar {
            background: white;
            padding: 18px 40px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .container {
            max-width: 850px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 18px rgba(0,0,0,.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 25px;
        }

        .row {
            display: grid;
            grid-template-columns: 180px 1fr;
            padding: 14px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-back {
            background: #6c757d;
            color: white;
        }

        .btn-edit {
            background: #ffc107;
            color: #222;
        }
    </style>
</head>

<body>

<div class="navbar">
    <a href="{{ route('books.index') }}">📚 Perpustakaan</a>

    <a href="{{ route('books.index') }}">Daftar Buku</a>
</div>

<div class="container">

    <div class="card">

        <h1>Detail Buku</h1>

        <div class="row">
            <div class="label">Judul</div>
            <div>{{ $book->title }}</div>
        </div>

        <div class="row">
            <div class="label">Penulis</div>
            <div>{{ $book->author }}</div>
        </div>

        <div class="row">
            <div class="label">Penerbit</div>
            <div>{{ $book->publisher }}</div>
        </div>

        <div class="row">
            <div class="label">Tahun Terbit</div>
            <div>{{ $book->year }}</div>
        </div>

        <div class="row">
            <div class="label">Stok</div>
            <div>{{ $book->stock }}</div>
        </div>

        <div class="row">
            <div class="label">Kategori</div>
            <div>{{ $book->category->name }}</div>
        </div>

        <div class="buttons">

            <a href="{{ route('books.index') }}" class="btn btn-back">
                ← Kembali
            </a>

            <a href="{{ route('books.edit', $book) }}" class="btn btn-edit">
                Edit Buku
            </a>

        </div>

    </div>

</div>

</body>
</html>