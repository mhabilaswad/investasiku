<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur | InvestasiKU</title>

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

        h1, h2 {
            color: #1A3636;
            text-align: center;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #333;
        }

        .feature {
            background-color: #D6BD98;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        a {
            text-decoration: none;
            color: #28a745;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
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

    <!-- Fitur InvestasiKU Section -->
    <div class="container">
        <h1>Fitur InvestasiKU</h1>

        <div class="feature">
            <h2>Kalkulator Return Investasi</h2>
            <p>Dengan Kalkulator Return Investasi kami, Anda dapat dengan mudah menghitung estimasi return investasi Anda berdasarkan nominal, lama investasi, dan persentase return per tahun. Ini adalah alat yang sangat berguna bagi siapa saja yang ingin memulai investasi dengan perhitungan yang lebih jelas.</p>
        </div>

        <div class="feature">
            <h2>Perhitungan Sederhana dan Akurat</h2>
            <p>Proses perhitungan yang kami tawarkan sangat sederhana, namun memberikan hasil yang akurat dengan menggunakan rumus pertumbuhan investasi berbasis persentase tahunan. Ini membantu Anda merencanakan masa depan keuangan Anda dengan lebih baik.</p>
        </div>

        <div class="feature">
            <h2>Visualisasi Hasil</h2>
            <p>Kami juga menyediakan grafik dan diagram yang membantu Anda memahami bagaimana investasi Anda berkembang seiring waktu. Dengan visualisasi ini, Anda dapat lebih mudah merencanakan tujuan keuangan Anda.</p>
        </div>

        <div class="feature">
            <h2>Panduan Investasi Cerdas</h2>
            <p>Ingin tahu lebih banyak tentang cara berinvestasi yang bijak? <a href="{{ route('panduan') }}">Baca lebih lanjut</a> untuk panduan lengkapnya!</p>
        </div>

    </div>

    <!-- Footer Section -->
    <footer>
        <p>Tentang Kami | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
