<?php


// Perintah pindahkan file index.php
 // sudo mv index/index.php /var/www/html 

// Tentukan project yang akan dijalankan
$projectPath = '/home/kayzen/app-hotel'; // Ganti dengan path project yang diinginkan

// Pindah ke direktori project
chdir($projectPath);
$command = 'php artisan serve';

// Cek apakah server sudah berjalan
exec("netstat -ano | findstr :8000", $output);

if (empty($output)) {
    // Jika belum berjalan, jalankan server
    pclose(popen("start /B " . $command, "r"));
}

// Redirect ke localhost
header("Location: http://127.0.0.1:8000");
exit;
