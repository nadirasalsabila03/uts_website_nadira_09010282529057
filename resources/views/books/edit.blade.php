<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

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
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Buku</h1>

    @if($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Judul Buku</label>
        <input type="text"
               name="title"
               value="{{ old('title', $book->title) }}"
               required>

        <label>Penulis</label>
        <input type="text"
               name="author"
               value="{{ old('author', $book->author) }}"
               required>

        <label>Penerbit</label>
        <input type="text"
               name="publisher"
               value="{{ old('publisher', $book->publisher) }}"
               required>

        <label>Tahun Terbit</label>
        <input type="number"
               name="year"
               value="{{ old('year', $book->year) }}"
               required>

        <label>Stok</label>
        <input type="number"
               name="stock"
               value="{{ old('stock', $book->stock) }}"
               min="0"
               required>

        <label>Kategori</label>

        <select name="category_id" required>

            @foreach($categories as $category)

                <option value="{{ $category->id }}"
                    {{ $book->category_id == $category->id ? 'selected' : '' }}>

                    {{ $category->name }}

                </option>

            @endforeach

        </select>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('books.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>