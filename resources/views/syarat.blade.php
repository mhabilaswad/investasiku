<!-- resources/views/syarat.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan | InvestasiKU</title>
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
        p {
            line-height: 1.6;
            color: #333;
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

    <!-- Syarat & Ketentuan Section -->
    <div class="container">
        <h1>Syarat & Ketentuan</h1>
        <p>Selamat datang di InvestasiKU! Dengan menggunakan platform kami, Anda setuju untuk mematuhi syarat dan ketentuan berikut:</p>

        <h2>1. Penerimaan Ketentuan</h2>
        <p>Dengan menggunakan layanan kami, Anda setuju untuk membaca, memahami, dan menerima semua syarat dan ketentuan ini. Jika Anda tidak setuju, harap hentikan penggunaan platform kami.</p>

        <h2>2. Penggunaan Layanan</h2>
        <p>Platform ini dirancang untuk membantu pengguna mengelola investasi. Anda bertanggung jawab atas keakuratan informasi yang Anda masukkan dan penggunaan layanan ini sesuai dengan hukum yang berlaku.</p>

        <h2>3. Hak Kekayaan Intelektual</h2>
        <p>Semua konten pada platform ini, termasuk teks, gambar, logo, dan kode, adalah milik InvestasiKU dan dilindungi oleh undang-undang hak cipta. Anda tidak diperbolehkan menyalin atau menyebarluaskan konten tanpa izin tertulis.</p>

        <h2>4. Batasan Tanggung Jawab</h2>
        <p>InvestasiKU tidak bertanggung jawab atas kerugian atau kerusakan yang terjadi akibat penggunaan platform ini, termasuk kesalahan data atau gangguan layanan.</p>

        <h2>5. Perubahan Ketentuan</h2>
        <p>Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja. Kami akan memberi tahu Anda melalui platform kami jika ada perubahan signifikan.</p>

        <p>Jika Anda memiliki pertanyaan tentang syarat dan ketentuan ini, silakan hubungi kami di <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a>.</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>Tentang Kami | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
