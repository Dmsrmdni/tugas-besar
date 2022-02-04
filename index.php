<?php
// Koneksi ke Data Base
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,"hotel");

// Ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn,"SELECT * FROM admin");

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Siswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Tanggal Pesan</th>
                <th>Lama Pesan</th>
                <th>Tipe Kamar</th>
                <th>Jumlah Kamar</th>
            </tr>

            <?php while ($siswa = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>
                    <a href="ubah.php?id=<?=$siswa["id"]?>">Edit</a> |
                    <a href="hapus.php?id=<?=$siswa["id"]?>">Hapus</a>
                </td>

                <td><?= $siswa["nama"];?></td>
                <td><?= $siswa["tanggal_pesan"];?></td>
                <td><?= $siswa["lama_pesan"];?></td>
                <td><?= $siswa["tipe_kamar"];?></td>
                <td><?= $siswa["jumlah_kamar"];?></td>
            </tr>
            <?php endwhile;?>
        </table>
    </body>
</html>