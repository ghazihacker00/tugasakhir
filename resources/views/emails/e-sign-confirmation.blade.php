<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pengajuan Tandatangan Elektronik</title>
</head>
<body>
    <h1>Konfirmasi Pengajuan Tandatangan Elektronik</h1>
    <p>Halo, {{ $nama_lengkap }},</p>
    <p>Terima kasih telah melakukan pengajuan Tandatangan Elektronik. Berikut adalah kode tiket Anda:</p>
    <p><strong>Kode Tiket: {{ $kode_tiket }}</strong></p>
    <p>Harap simpan kode tiket ini dengan baik. Kode tiket ini dapat digunakan untuk memeriksa status pengajuan Anda melalui <a href="{{ $url_cek_tiket }}">link berikut</a>.</p>
    <p>Jangan sampai hilang, karena kode ini diperlukan untuk melakukan pengecekan status pengajuan.</p>
    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>
</html>
