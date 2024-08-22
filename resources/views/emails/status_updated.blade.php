<!DOCTYPE html>
<html>
<head>
    <title>Status Tiket Anda Telah Diperbarui</title>
</head>
<body>
    <h1>Status Tiket Anda Telah Diperbarui</h1>

    <p>Halo, {{ $ticket->nama_lengkap }}</p>
    <p>Status tiket Anda dengan kode {{ $ticket->kode_tiket }} telah diperbarui menjadi: {{ $ticket->status }}.</p>

    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>
</html>
