<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Perpustakaan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #e8f0ff, #f8f9fc);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 430px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,.15);
        }

        h1 {
            text-align: center;
            margin: 0 0 8px;
            color: #222;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #377dff;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 7px;
            background: #377dff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .error {
            background: #ffe5e5;
            color: #b42318;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 18px;
        }

        .login {
            text-align: center;
            margin-top: 20px;
        }

        .login a {
            color: #377dff;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>Daftar Akun</h1>

    <div class="subtitle">
        Buat akun untuk mengakses Perpustakaan
    </div>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Daftar</button>
    </form>

    <div class="login">
        Sudah punya akun?
        <a href="{{ route('login') }}">Login sekarang</a>
    </div>

</div>

</body>
</html>
