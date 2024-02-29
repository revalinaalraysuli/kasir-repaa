<?php
include_once("../conn/koneksi.php");

if (isset($_POST['update'])) {
    $id = $_GET['id_produk'];

    $name = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if ($_FILES["foto"]["name"]){
        $target = "../foto/";
        $time = date('dmYHis');
        $type = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
        $targetfile = $target . $time . '.' . $type;
        $filename = $time . '.' . $type;

        $uploadOk = 1;

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetfile)) {
            $foto = $filename;
        } else {
            echo "maaf, terjadi kesalahan saat mengupload file gambar.";
        }
    }
    if (!isset($foto)) {
        $foto = $_POST['existing_foto'];
    }
    $result = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$name', harga='$harga', stok='$stok', foto='$foto' WHERE id_produk=$id");

    if ($result) {
        echo "<script>alert('Berhasil mengedit produk');window.location='?page=stok';</script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$id = $_GET['id_produk'];

$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk=$id");

while ($barang_data = mysqli_fetch_array($result1)) {
    $name = $barang_data['nama_produk'];
    $harga = $barang_data['harga'];
    $stok = $barang_data['stok'];
    $foto = $barang_data['foto'];
}
$koneksi->close();
?>

<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <div class="card-header">
                <h3 class="">Update barang</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama_produk" value="<?php echo $name; ?>" placeholder="Masukkan Nama" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="harga" value="<?php echo $harga; ?>" placeholder="Masukkan Harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok:</label>
                        <input type="text" class="form-control" id="stok" value="<?php echo $stok; ?>" placeholder="Masukkan Stok" name="stok">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto<span style="color: red;"> *</span></label>
                        <input type="file" class="form-control" id="foto" name="foto"> 
                        <input type="hidden" name="existing_foto" value="<?php echo $foto; ?>">
                        <p style="color: blue;">hanya bisa menginput foto dengan ekstensi PNG, JPG, JPEG, SVG</p> 
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
