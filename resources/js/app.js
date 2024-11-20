document.getElementById("investment-form").addEventListener("submit", function(event) {
    event.preventDefault();  // Ini mencegah form submit dan reload halaman.

    // Ambil nilai input dari pengguna
    const nominal = parseFloat(document.getElementById("nominal").value);
    const persen = parseFloat(document.getElementById("persen").value) / 100;
    const tahun = parseInt(document.getElementById("tahun").value);

    // Validasi input
    if (isNaN(nominal) || isNaN(persen) || isNaN(tahun) || nominal <= 0 || persen <= 0 || tahun <= 0) {
        alert("Masukkan nilai yang valid!");
        return;
    }

    // Hitung hasil investasi
    let hasil = nominal;
    for (let i = 1; i <= tahun; i++) {
        hasil = hasil * (1 + persen); // Peningkatan per tahun
    }

    // Tampilkan hasil
    const resultElement = document.getElementById("result");
    const outputElement = document.getElementById("output");
    outputElement.innerHTML = `Hasil Investasi setelah ${tahun} tahun adalah: <strong>Rp ${hasil.toLocaleString()}</strong>`;
    resultElement.style.display = "block";  // Menampilkan hasil
});
