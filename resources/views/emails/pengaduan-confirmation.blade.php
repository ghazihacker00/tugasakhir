<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pengaduan Anda</title>
</head>
<body>
    <h1>Konfirmasi Pengaduan Anda</h1>
    <p>Halo, {{ $nama }},</p>
    <p>Terima kasih telah mengirimkan pengaduan dengan judul: <strong>{{ $judul }}</strong>.</p>
    <p>Pengaduan Anda saat ini sedang dalam proses penanganan dengan prioritas: <strong>{{ $prioritas }}</strong>.</p>
    <p>Berikut adalah pesan yang Anda sampaikan:</p>
    <blockquote>{{ $pesan }}</blockquote>
    <p>Terima kasih telah menggunakan layanan kami. Kami akan menghubungi Anda kembali jika ada informasi lebih lanjut.</p>
</body>
</html>
