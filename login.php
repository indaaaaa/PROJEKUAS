<?php
session_start();
require 'Admin/setting.php';
if (isset($_POST ['login'])){
    $username = $_POST ['txtusername'];
    $password = sha1($_POST ['txtpassword']);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE Username = '$username' and Password='$password'");

    if (mysqli_num_rows($query) === 1){
        $data = mysqli_fetch_object($query);
        $_SESSION['login'] = true;
        $_SESSION['Nama'] = $data->Nama;
        $_SESSION['Hak_akses'] = $data->Hak_akses;
        

        header('location: Admin/view.php');
    }
    echo  $error = 'Username atau Password Salah';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <div class="col-4">
                    <div class="card card-body">
                        <h3>Login Form</h3>
                        <Form action="" method="POST">
                            <input type="text" name="txtusername" class="form-control mb-3"
                                placeholder="Masukan Username">
                            <input type="password" name="txtpassword" class="form-control mb-3"
                                placeholder="Masukan Password">
                            <input type="submit" value="login" name="login" class="btn btn-primary">

                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>

</body>

</html>