<?php
// Koneksi ke Data Base
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,"hotel");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM admin WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $lama_pesan = $_POST['lama_pesan'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $jumlah_kamar = $_POST['jumlah_kamar'];

    // buat query update
    $sql = "UPDATE admin SET nama='$nama', tanggal_pesan='$tanggal_pesan', lama_pesan='$lama_pesan', tipe_kamar='$tipe_kamar',jumlah_kamar='$jumlah_kamar' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    header('Location: index.php');

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
    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <table>
            <tr>
                <td>nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$siswa ['nama']?>"></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td>:</td>
                <td><input type="text" name="tanggal_pesan" value="<?=$siswa ['tanggal_pesan']?>"></td>
            </tr>
            <tr>
                <td>Lama Pesan</td>
                <td>:</td>
                <td><input type="text" name="lama_pesan" value="<?=$siswa ['lama_pesan']?>"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><input type="text" name="tipe_kamar" value="<?=$siswa ['tipe_kamar']?>"></td>
            </tr>
            <tr>
                <td>jumlah Kamar</td>
                <td>:</td>
                <td><input type="text" name="jumlah_kamar" value="<?=$siswa ['jumlah_kamar']?>"></td>
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