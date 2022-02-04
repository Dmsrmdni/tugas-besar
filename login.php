<?php
    // cek apakah tombol login telah ditekan
    if (isset($_POST["login"])) {
        // cek username dan password
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "admin" && $password == "admin") {
            // jika benar redirect ke halaman admin
            header("Location: index.php");
            exit;
        }elseif ($username == "tamu" && $password == "tamu") {
            // jika benar redirect ke halaman inputData
            header("Location: input2.php");
            exit;
        }else {
            $error = true;
        }
    }
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Login</title>
</head>

<body
    style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNOi9ZeLPXNrCSz12OOO3MMGcmoSRf_MVq5w&usqp=CAU);">



    <!-- card view -->
    <br>
    <br>
    <center>
        <h3 style="color: white;"> Silahkan Login</h3>
        <br>
        <div class="container">
            <div class="card" style="width: 20rem;">
                <center>
                    <img src="Logo.png" width="250" height="160">
                </center>
                <div class="card-body">
                    <form method = "POST">
                        <div class="container">
                            <div class="form-group">
                                <label for="exampleInputnama" style="margin-right: 180px;">Username</label>
                                <input type="text" class="form-control" id="exampleInputnama"
                                    placeholder= "Masukan Username..." name="username">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1" style="margin-right: 180px;">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukan Password..." name="password">
                            </div>

                            <center>
                                <br>
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>
