
<?php

// Koneksi ke Data Base
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,"hotel");


if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM admin WHERE id=$id";
   
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: index.php');
    }

}

?>