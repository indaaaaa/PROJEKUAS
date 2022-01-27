<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-3">
        <?php include 'navbar.php'; ?>
        <?php
    require 'setting.php';
        //menampilan data dalam table
        if(isset($_GET['url-id_barang'])){
            $input_id = $_GET['url-id_barang'];
            $query = "SELECT * FROM table_barang WHERE id_barang ='$input_id'";
            $result = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
       if(isset($_POST['simpan'])){
                 $input_id = $_POST['txtid'];
                 $txtNamaBarang = $_POST['txtNamaBarang'];
                 $txtHargaBeli = $_POST['txtHargaBeli'];
                 $txtHargaJual = $_POST['txtHargaJual'];
                 $txtDeskripsi = $_POST['txtDeskripsi'];
        //update syntax dalam mysql
                 $sql = "UPDATE table_barang SET 
                         Nama_Barang='$txtNamaBarang', Harga_Beli='$txtHargaBeli',Harga_Jual='$txtHargaJual',Deskripsi='$txtDeskripsi'
                         WHERE id_barang = $input_id";
                 $result = mysqli_query($koneksi,$sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
                if($result)  {
                  header('location:view.php');
      //jika salah data tidak berhasil diperbarui dan menghasilkan error
                }else {
                  echo 'Query Error'. mysqli_error($koneksi);
                }
                }
              ?>
        <form action="#" method="Post">
            <div class="card mt-3">
                <div class="card-header bg-primary">
                    Edit Data Barang
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">Nama Barang</label>
                        <input type="hidden" name="txtid" class="form-control" value="<?=$data->id_barang;?>">
                        <input type="text" name="txtNamaBarang" id="txtNama_Barang" class="form-control"
                            value="<?=$data->Nama_Barang;?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Harga Beli</label>
                        <input type="text" name="txtHargaBeli" class="form-control" value="<?=$data->Harga_Beli;?>">
                    </div>

                    <div class="mb-3">
                        <label for="">Harga Jual</label>
                        <input type="text" name="txtHargaJual" id="txtHarga_Jual" class="form-control"
                            value="<?=$data->Harga_Jual;?>">
                    </div>

                    <div class="mb-3">
                        <label for="">Deskripsi</label>
                        <input type="text" name="txtDeskripsi" id="txtDeskripsi" class="form-control"
                            value="<?=$data->Deskripsi;?>">
                    </div>
                    <input type="submit" name="simpan" value="Simpan Perubahan Data" class="btn btn-primary">
                    <a href="view.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>



        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>