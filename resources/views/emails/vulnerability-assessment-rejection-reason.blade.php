<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Anda Ditolak</title>
</head>
<body>
    <h1>Status Tiket Anda: Ditolak</h1>
    <p>Halo, {{ $nama_lengkap }},</p>
    <p>Kami menyesal untuk memberitahukan bahwa tiket Anda dengan kode {{ $kode_tiket }} telah ditolak.</p>
    <p>Alasan Penolakan: {{ $reason }}</p>
    <p>Terima kasih telah menggunakan layanan kami. Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
</body>
</html>
