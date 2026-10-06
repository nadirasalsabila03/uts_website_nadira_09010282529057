<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Buku</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">

        @csrf

        <label>Judul Buku</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Penulis</label>
        <input type="text" name="author" value="{{ old('author') }}" required>

        <label>Penerbit</label>
        <input type="text" name="publisher" value="{{ old('publisher') }}" required>

        <label>Tahun Terbit</label>
        <input type="number" name="year" value="{{ old('year') }}" required>

        <label>Stok</label>
        <input type="number" name="stock" value="{{ old('stock') }}" min="0" required>

        <label>Kategori</label>

        <select name="category_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('books.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>