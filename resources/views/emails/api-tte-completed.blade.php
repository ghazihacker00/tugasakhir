<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Anda Telah Selesai</title>
</head>
<body>
    <h1>Status Tiket Anda: Selesai</h1>
    <p>Halo, {{ $nama_lengkap }},</p>
    <p>Tiket Anda dengan kode {{ $kode_tiket }} telah diselesaikan.</p>
    <p>Alasan Penyelesaian: {{ $reason }}</p>
    <p>Silakan lihat lampiran untuk detail lebih lanjut.</p>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>
</html>
