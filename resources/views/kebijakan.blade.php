<!-- resources/views/kebijakan.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi | InvestasiKU</title>
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

    <!-- Kebijakan Privasi Section -->
    <div class="container">
        <h1>Kebijakan Privasi</h1>
        <p>Di InvestasiKU, privasi Anda adalah prioritas utama kami. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda saat menggunakan platform kami.</p>

        <h2>1. Informasi yang Kami Kumpulkan</h2>
        <p>Kami dapat mengumpulkan informasi pribadi seperti nama, email, nomor telepon, dan data transaksi untuk memberikan layanan terbaik kepada Anda.</p>

        <h2>2. Penggunaan Informasi</h2>
        <p>Informasi yang kami kumpulkan digunakan untuk memproses transaksi, memberikan dukungan pelanggan, dan meningkatkan layanan kami. Kami tidak akan membagikan informasi pribadi Anda kepada pihak ketiga tanpa izin Anda.</p>

        <h2>3. Keamanan Data</h2>
        <p>Kami menggunakan teknologi enkripsi dan protokol keamanan untuk melindungi informasi pribadi Anda dari akses yang tidak sah.</p>

        <h2>4. Hak Pengguna</h2>
        <p>Anda memiliki hak untuk mengakses, memperbarui, atau menghapus informasi pribadi Anda kapan saja. Silakan hubungi kami jika Anda ingin menggunakan hak ini.</p>

        <h2>5. Perubahan Kebijakan</h2>
        <p>Kebijakan privasi ini dapat diperbarui sewaktu-waktu. Kami akan memberi tahu Anda melalui platform kami jika ada perubahan signifikan pada kebijakan ini.</p>

        <p>Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami di <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a>.</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p><a href="tentang">Tentang Kami</a> | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
