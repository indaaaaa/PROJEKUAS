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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php include 'navbar_admin.php'; ?>
        <?php
                require 'setting.php';
                if (isset($_POST['simpan'])) {
                    $txtNama_Barang = $_POST['txtNama_Barang'];
                    $txtHarga_Beli = $_POST['txtHarga_Beli'];
                    $txtHarga_Jual = $_POST['txtHarga_Jual'];
                    $txtDeskripsi = $_POST['txtDeskripsi'];
                    $txtGambar = $_POST['Gambar'];
                    $sql = "INSERT INTO table_barang VALUES (NULL, '$txtNama_Barang', '$txtHarga_Jual', '$txtHarga_Beli','$txtDeskripsi', '$txtGambar')";
                    $query = mysqli_query($koneksi, $sql);
                    if ($query){
                        header('location: view.php');
                    }else {
                        echo 'Query Error : ' . mysqli_error($koneksi);
                    } 
                }
    
                ?>
        <form action="#" method="POST">
            <div class="card mt-3">
                <div class="card-header bg-primary">
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" name="txtNama_Barang" class="form-control" require="data tidak boleh kosong"
                            autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label>Harga Beli</label>
                        <input type="number" name="txtHarga_Beli" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual</label>
                        <input type="number" name="txtHarga_Jual" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="txtDeskripsi" class="form-control" cols="20" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Gambar</label>
                        <input type="file" name="Gambar" class="form-control">
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    <a href="view.php" class="btn btn-secondary"> HOME </a>
                  
                </div>
            </div>

        </form>
    </div>

    <?php include 'footer.php'; ?>
    <script src="../js/bootstrap.min"></script>
</body>

</html>