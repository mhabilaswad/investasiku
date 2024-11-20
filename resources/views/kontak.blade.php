<!-- resources/views/kontak.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami | InvestasiKU</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #1A3636;
            padding: 20px 0;
            color: white;
            text-align: center;
        }
        header .logo {
            font-size: 1.8em;
            font-weight: bold;
            text-transform: uppercase;
        }
        nav {
            background-color: #40534C;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1em;
        }
        nav a:hover {
            color: #D6BD98;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1A3636;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button {
            background-color: #40534C;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        form button:hover {
            background-color: #1A3636;
        }
        .contact-info {
            margin-top: 30px;
            text-align: center;
            font-size: 1.1em;
        }
        footer {
            background-color: #40534C;
            color: white;
            padding: 15px;
            text-align: center;
        }
        footer a {
            color: #D6BD98;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="logo">InvestasiKU</div>
    </header>

    <!-- Navbar Section -->
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('fitur') }}">Fitur</a>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
        <a href="{{ route('kontak') }}">Kontak</a>
        <a href="{{ route('faq') }}">FAQ</a>
    </nav>

    <!-- Kontak Kami Section -->
    <div class="container">
        <h1>Kontak Kami</h1>
        <p>Jika Anda memiliki pertanyaan, saran, atau membutuhkan bantuan, silakan menghubungi kami melalui form di bawah ini:</p>

        <!-- Form Kontak -->
        <form method="POST" action="{{ route('submitContact') }}">
            @csrf
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <p><strong>Email:</strong> <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
            <p><strong>Telepon:</strong> +62 812 345 678</p>
            <p><strong>Alamat:</strong> Banda Aceh</p>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p><a href="tentang">Tentang Kami</a> | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
