<?php
session_start();
if (!isset($_SESSION['login'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
<div class="container">
        <?php include 'navbar_indeks.php'; ?>
        <div class="row mt-3">
            <?php 
                require 'Admin/setting.php';
                $query = "SELECT * FROM table_barang";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_object($sql)){
            ?>
            <div class="col-sm-3">
                <div class="card">
                    <img src="Admin/Gambar/<?= $data->Gambar; ?>"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data->Nama_Barang; ?></h5>
                        <p class="card-text"><?= $data->Deskripsi; ?></p>
            
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>



    </div>
  <?php include 'Admin/footer.php'; ?>
  <script src="js/bootstrap.min"></script>
</body>

</html>