<?php
// Mengubah angka menjadi format rupiah
function formatRupiah(float $angka): string
{
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Menghitung besar potongan harga (nilai default diskon 10%)
function hitungDiskon(float $harga, float $persen = 10): float
{
    return $harga * ($persen / 100);
}

// Memeriksa format email. Mengembalikan true jika valid, false jika tidak
function validasiEmail(string $email): bool
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

// Meringkas teks panjang menjadi sejumlah karakter lalu diberi "..."
function ringkasTeks(string $teks, int $batas = 50): string
{
    if (strlen($teks) <= $batas) {
        return $teks;
    }
    return substr($teks, 0, $batas) . '...';
}

// Escaping teks sebelum ditampilkan ke HTML
function e(string $nilai): string
{
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}
?>
