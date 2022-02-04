<?php

// Koneksi ke Data Base
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,"hotel");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $lama_pesan = $_POST['lama_pesan'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $jumlah_kamar = $_POST['jumlah_kamar'];

    // buat query
    $sql = "INSERT INTO admin VALUES('','$nama', '$tanggal_pesan', '$lama_pesan', '$tipe_kamar', '$jumlah_kamar')";
    $query = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td>:</td>
                <td><input type="text" name="tanggal_pesan"></td>
            </tr>
            <tr>
                <td>Lama Pesan</td>
                <td>:</td>
                <td><input type="text" name="lama_pesan"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><input type="text" name="tipe_kamar"></td>
            </tr>
            <tr>
                <td>jumlah Kamar</td>
                <td>:</td>
                <td><input type="text" name="jumlah_kamar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <button type="submit" name="kirim">Kirim</button> </td>
            </tr>
        </table>
    </form>
</body>
</html>

