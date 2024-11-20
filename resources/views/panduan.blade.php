<!-- resources/views/panduan.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Investasi Cerdas - InvestasiKU</title>
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

    <!-- Panduan Investasi Section -->
    <div class="container">
        <h1>Panduan Investasi Cerdas</h1>
        <p>Investasi adalah salah satu cara untuk meningkatkan kekayaan dan mempersiapkan masa depan. Berikut ini adalah beberapa tips dan panduan yang dapat membantu Anda berinvestasi dengan bijak:</p>
        
        <h2>1. Tentukan Tujuan Investasi</h2>
        <p>Menetapkan tujuan investasi sangat penting. Apakah tujuan Anda untuk pensiun, membeli rumah, atau membayar biaya pendidikan anak? Setiap tujuan memiliki karakteristik dan strategi investasi yang berbeda.</p>

        <h2>2. Pahami Profil Risiko Anda</h2>
        <p>Setiap orang memiliki toleransi risiko yang berbeda. Jika Anda lebih cenderung menghindari risiko, mungkin Anda lebih cocok dengan investasi yang lebih aman seperti deposito atau obligasi. Namun, jika Anda siap untuk mengambil risiko lebih tinggi, saham atau reksa dana bisa menjadi pilihan yang menarik.</p>

        <h2>3. Diversifikasi Portofolio Anda</h2>
        <p>Penting untuk tidak menaruh semua dana Anda dalam satu instrumen investasi. Diversifikasi akan membantu mengurangi risiko. Cobalah untuk berinvestasi dalam berbagai jenis aset, seperti saham, obligasi, atau properti, untuk meminimalkan kerugian saat pasar turun.</p>

        <h2>4. Lakukan Riset Sebelum Berinvestasi</h2>
        <p>Sebelum memutuskan untuk berinvestasi, lakukan riset mendalam tentang instrumen yang ingin Anda pilih. Pastikan Anda memahami keuntungan, risiko, dan cara kerja instrumen tersebut. Jika perlu, konsultasikan dengan penasihat keuangan.</p>

        <h2>5. Evaluasi Investasi Secara Berkala</h2>
        <p>Investasi bukan sesuatu yang harus Anda lakukan sekali dan lupa. Lakukan evaluasi secara rutin untuk memastikan bahwa strategi investasi Anda masih sesuai dengan tujuan dan situasi keuangan Anda yang terkini.</p>
        
        <h2>6. Mulailah Sejak Dini</h2>
        <p>Semakin cepat Anda memulai berinvestasi, semakin banyak waktu yang Anda miliki untuk mendapatkan keuntungan dari bunga majemuk. Mulailah dengan nominal kecil, dan tingkatkan seiring waktu saat Anda merasa lebih nyaman dengan investasi Anda.</p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>Tentang Kami | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>