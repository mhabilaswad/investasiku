<!-- resources/views/tentang.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | InvestasiKU</title>
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

    <!-- Tentang Kami Section -->
    <div class="container">
        <h1>Tentang Kami</h1>
        <p>
            InvestasiKU adalah platform inovatif yang bertujuan untuk membantu masyarakat Indonesia memahami dan memanfaatkan peluang investasi dengan mudah dan aman. 
            Kami percaya bahwa investasi bukan hanya tentang keuntungan, tetapi juga tentang membangun masa depan yang lebih baik.
        </p>
        
        <h2>Misi Kami</h2>
        <p>
            Memberikan edukasi dan akses mudah kepada masyarakat untuk memulai perjalanan investasi mereka, serta menyediakan alat bantu yang intuitif dan informatif.
        </p>

        <h2>Visi Kami</h2>
        <p>
            Menjadi platform investasi terdepan di Indonesia yang memberikan dampak positif bagi ekonomi dan kehidupan masyarakat.
        </p>

        <h2>Nilai-Nilai Kami</h2>
        <p>
            <strong>1. Transparansi:</strong> Kami menjunjung tinggi keterbukaan dalam memberikan informasi kepada pengguna kami.<br>
            <strong>2. Inovasi:</strong> Kami terus berusaha menciptakan solusi yang relevan untuk kebutuhan masyarakat modern.<br>
            <strong>3. Keberlanjutan:</strong> Kami berkomitmen untuk menciptakan dampak jangka panjang yang positif bagi semua pihak.
        </p>

        <h2>Pembuat Website</h2>
        <p>
            Website ini dikembangkan oleh dua mahasiswa Informatika Universitas Syiah Kuala untuk menyelesaikan tugas mata kuliah Pengembangan dan Operasional Perangkat Lunak. 
            Kami percaya bahwa pengalaman ini dapat memberikan kontribusi nyata dalam dunia pengembangan perangkat lunak. Berikut adalah informasi tentang kami:
        </p>
        <ul>
            <li><strong>Muhammad Habil Aswad</strong> - NPM 2208107010013<br>
            <a href="https://www.linkedin.com/in/muhammad-habil-aswad/" target="_blank">LinkedIn: Muhammad Habil Aswad</a></li>
            <li><strong>Muhammad Nabil Maulana</strong> - NPM 2208107010011<br>
            <a href="https://www.linkedin.com/in/m-nabil-maulana/" target="_blank">LinkedIn: Muhammad Nabil Maulana</a></li>
        </ul>
        <p>
            Dengan semangat inovasi dan kolaborasi, kami berharap platform ini dapat bermanfaat bagi pengguna di Indonesia.
        </p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p><a href="tentang">Tentang Kami</a> | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
