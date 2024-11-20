<!-- resources/views/faq.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | InvestasiKU</title>
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
        .faq-item {
            margin-bottom: 20px;
        }
        .faq-item h3 {
            color: #40534C;
            cursor: pointer;
        }
        .faq-item p {
            margin: 10px 0;
            color: #333;
            display: none;
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.faq-item h3');
            faqItems.forEach(item => {
                item.addEventListener('click', () => {
                    const answer = item.nextElementSibling;
                    answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
                });
            });
        });
    </script>
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

    <!-- FAQ Section -->
    <div class="container">
        <h1>Frequently Asked Questions (FAQ)</h1>
        <p>Berikut adalah beberapa pertanyaan yang sering diajukan oleh pengguna kami. Klik pada pertanyaan untuk melihat jawabannya.</p>

        <!-- FAQ Items -->
        <div class="faq-item">
            <h3>Apa itu InvestasiKU?</h3>
            <p>InvestasiKU adalah platform yang membantu Anda mengelola investasi secara efektif dan mudah melalui berbagai fitur yang kami sediakan.</p>
        </div>

        <div class="faq-item">
            <h3>Bagaimana cara mendaftar?</h3>
            <p>Anda dapat mendaftar dengan mengklik tombol "Daftar" di halaman utama kami dan mengisi data yang diperlukan.</p>
        </div>

        <div class="faq-item">
            <h3>Apakah platform ini gratis?</h3>
            <p>InvestasiKU menyediakan fitur dasar secara gratis. Namun, kami juga menawarkan fitur premium dengan biaya langganan.</p>
        </div>

        <div class="faq-item">
            <h3>Bagaimana cara menghubungi tim support?</h3>
            <p>Anda dapat menghubungi kami melalui halaman <a href="{{ route('kontak') }}">Kontak</a> untuk mendapatkan bantuan lebih lanjut.</p>
        </div>

        <div class="faq-item">
            <h3>Apakah data saya aman?</h3>
            <p>Ya, kami menggunakan teknologi enkripsi dan protokol keamanan terkini untuk memastikan data Anda terlindungi.</p>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p><a href="tentang">Tentang Kami</a> | <a href="#">Sosial Media</a> | <a href="{{ route('kebijakan') }}">Kebijakan Privasi</a> | <a href="{{ route('syarat') }}">Syarat & Ketentuan</a></p>
        <p>Kontak: <a href="mailto:HNBN@gmail.com">HNBN@gmail.com</a></p>
    </footer>

</body>
</html>
