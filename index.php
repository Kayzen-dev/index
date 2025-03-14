<?php

// Tentukan project yang akan dijalankan
$projectPath = '/home/kayzen/app-hotel'; // Ganti dengan path proyek Laravel kamu

// Pindah ke direktori proyek Laravel
chdir($projectPath);
$command = 'php artisan serve --host=127.0.0.1 --port=8000';

// Cek apakah server sudah berjalan pada port 8000
exec("lsof -i :8000", $output);

// Jika server belum berjalan, jalankan server Laravel di latar belakang
if (empty($output)) {
    // Menjalankan perintah artisan serve di latar belakang
    // Gunakan "nohup" untuk menjaga proses berjalan setelah browser ditutup
    pclose(popen("nohup $command > /dev/null 2>&1 &", "r"));
}

// Redirect ke localhost:8000
header("Location: http://127.0.0.1:8000");
exit;
