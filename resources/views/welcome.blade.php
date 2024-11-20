<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InvestasiKU</title>

    <!-- Menambahkan style CSS di dalam file -->
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
        .cta-button {
            background-color: #677D6A;
            color: white;
            padding: 15px 25px;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }
        .cta-button:hover {
            background-color: #D6BD98;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 1.2em;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        #result {
            margin-top: 30px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 4px;
            display: none;
        }
        #output {
            font-size: 1.3em;
            font-weight: bold;
            color: #007bff;
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
    <!-- Navbar Section -->
    <nav>
        <a href="{{ route('home') }}">Home</a> <!-- Pastikan Home juga memiliki route yang benar -->
        <a href="{{ route('fitur') }}">Fitur</a>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
        <a href="{{ route('kontak') }}">Kontak</a>
        <a href="{{ route('faq') }}">FAQ</a>
    </nav>


    <!-- Hero Section -->
    <div class="container">
        <h1>Kalkulator Return Investasi</h1>
        <p style="text-align:center;">Hitung estimasi return investasi Anda hanya dalam beberapa langkah mudah.</p>
        <button class="cta-button" onclick="document.getElementById('investment-form').scrollIntoView();">Coba Kalkulator</button>
    </div>

    <!-- Kalkulator Investasi -->
    <div class="container" id="investment-form">
        <h2>Masukkan Data Investasi Anda</h2>
        <form id="investment-form-submit">
            <div class="form-group">
                <label for="nominal">Nominal Investasi (Rp):</label>
                <input type="number" id="nominal" required>
            </div>
            <div class="form-group">
                <label for="persen">Rata-rata Return per Tahun (%):</label>
                <input type="number" id="persen" required>
            </div>
            <div class="form-group">
                <label for="tahun">Lama Investasi (Tahun):</label>
                <input type="number" id="tahun" required>
            </div>
            <button type="submit">Hitung</button>
        </form>
    </div>

    <!-- Hasil Kalkulasi -->
    <div class="container" id="result">
        <h2>Estimasi Hasil Investasi Anda</h2>
        <p id="output"></p>
    </div>

    <!-- Tips Investasi -->
    <div class="container">
        <h2>Panduan Investasi Cerdas</h2>
        <p>Berikut adalah beberapa tips berinvestasi dengan bijak dan memilih instrumen investasi yang tepat. Jangan lupa untuk selalu melakukan riset sebelum berinvestasi.</p>
        <!-- Ubah tombol menjadi link yang mengarah ke halaman panduan -->
        <a href="{{ route('panduan') }}" class="cta-button">Baca lebih lanjut</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <p><a href="tentang">Tentang Kami</a> | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

    <!-- JavaScript untuk Kalkulasi -->
    <script>
        document.getElementById("investment-form-submit").addEventListener("submit", function(event) {
            event.preventDefault();

            const nominal = parseFloat(document.getElementById("nominal").value);
            const persen = parseFloat(document.getElementById("persen").value) / 100;
            const tahun = parseInt(document.getElementById("tahun").value);

            if (isNaN(nominal) || isNaN(persen) || isNaN(tahun) || nominal <= 0 || persen <= 0 || tahun <= 0) {
                alert("Masukkan nilai yang valid!");
                return;
            }

            let hasil = nominal;
            for (let i = 1; i <= tahun; i++) {
                hasil = hasil * (1 + persen);
            }

            const outputElement = document.getElementById("output");
            outputElement.innerHTML = `Hasil Investasi setelah ${tahun} tahun adalah: <strong>Rp ${hasil.toLocaleString()}</strong>`;

            document.getElementById("result").style.display = "block";
        });
    </script>

</body>
</html>