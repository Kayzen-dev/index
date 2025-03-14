<?php


// Perintah pindahkan file index.php
 // sudo mv index/index.php /var/www/html 

// Perintah Hapus file defalurt = sudo rm index.html
// Perintah Hapus Folder GIt = sudo rm -r index

// Tentukan project yang akan dijalankan
$projectPath = '/home/kayzen/app-hotel'; // Ganti dengan path proyek Laravel kamu

// Pindah ke direktori proyek Laravel
chdir($projectPath);
$command = 'php artisan ser --host 172.23.247.6';

// Cek apakah server sudah berjalan pada port 8000
exec("lsof -i :8000", $output);

if (empty($output)) {
    // Jika server belum berjalan, jalankan server Laravel di latar belakang
    pclose(popen($command . " > /dev/null 2>&1 &", "r"));
}

// Redirect ke localhost:8000
header("Location: http://172.23.247.6:8000");
exit;
