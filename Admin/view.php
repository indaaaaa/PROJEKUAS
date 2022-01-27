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
    <title>Barang</title>
</head>

<body>
    <div class="container mt-5">        
        <?php include 'navbar_admin.php'; ?>  
        <a href="tambah.php" class="btn btn-primary mt-3"> TAMBAH DATA </a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'setting.php';
                $query = "SELECT * FROM table_barang";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $data->Nama_Barang; ?> </td>
                    <td> <?php echo $data->Harga_Jual; ?> </td>
                    <td> <?php echo $data->Harga_Beli; ?> </td>
                    <td> <?php echo $data->Deskripsi; ?> </td>
                    <td><a href="Gambar/<?php echo $data->Gambar; ?>"><?php echo $data->Gambar; ?></a> </td>
                    <td>
                        <a href="edit.php?url-id_barang=<?= $data->id_barang;?>">
                            <input type="submit" value="Edit" class="btn btn-warning" ></a> 
    <?php
    if($_SESSION['Hak_akses'] == 'Admin'){

    ?>
    <a href="hapus.php?id=<?= $data->id_barang;?>">
       <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
       </a>
       <?php
        }
        ?>
    </td>
                    
            
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include 'footer.php'; ?>
</body>
<script src="../js/bootstrap.min"></script>
</html>