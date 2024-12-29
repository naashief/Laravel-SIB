<?php

// Fungsi sapaan
function sapaan($nama = "Tamu", $waktu = null) {
    // Cek apakah waktu diisi
    if ($waktu) {
        switch (strtolower($waktu)) {
            case "pagi":
                return "Selamat pagi, $nama! Semoga harimu menyenangkan.";
            case "siang":
                return "Selamat siang, $nama! Jangan lupa makan siang ya.";
            case "sore":
                return "Selamat sore, $nama! Nikmati waktu santaimu.";
            case "malam":
                return "Selamat malam, $nama! Semoga istirahatmu nyenyak.";
            default:
                return "Halo, $nama! Waktu tidak dikenal, tapi tetap semangat!";
        }
    } else {
        // Jika waktu tidak diisi
        return "Halo, $nama! Selamat datang!";
    }
}

// Contoh penggunaan fungsi
echo sapaan("Nashief", "pagi"); // Selamat pagi, Nashief! Semoga harimu menyenangkan.
echo "\n";
echo sapaan("Nashief", "siang"); // Selamat siang, Nashief! Jangan lupa makan siang ya.
echo "\n";
echo sapaan(); // Halo, Tamu! Selamat datang!
echo "\n";
echo sapaan("Nashief"); // Halo, Nashief! Selamat datang!
?>
