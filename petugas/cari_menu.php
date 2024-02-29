<?php
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$search%'");
} else {
    $sql = $koneksi->query("SELECT * FROM produk");
}
?>
<div class="row">
        <div class="col-lg-12 grid-margin strecth-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Barang</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah-barang" title="Tambah Barang"
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah Produk</span>
                        </a>
                    </p>

                    <form class="d-flex" action="?page=cari_menu" method="POST">
                        <input class="form-control me-2" type="search" placeholder="cari menu..." aria-label="Search" name="search">
                        <button class="btn btn-outline-light" type="submit">Cari</button>
                    </form>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $name = $_POST['search'];
                            $no = 1;
                            $sql = $koneksi->execute_query("SELECT * FROM produk WHERE nama_produk LIKE '%$name%'");
                            while ($data= $sql->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['foto']."' width='70' height='70'>";?></td>
                                <td><?php echo $data['nama_produk']?></td>
                                <td>Rp.<?php echo number_format($data['harga'])?></td>
                                <td><?php echo $data['stok']?></td>
                                <td><?php echo $data['terjual']?></td>
                                <td align="center" width="12%"><a href="?page=edit_barang&id_produk=<?= $data['id_produk'];?>" class="badge badge-primary p-2" title="Edit"><i class="">Edit</i></a> | <a href="?page=hapus_barang&id_produk=<?= $data['id_produk']; ?>" class="badge badge-danger p-2 delete-data" onclick="return confirm('Anda Yakin Ingin Menghapus Barang Ini!?')">Delete</i></a></td>
                                <td></td>
                                <td>

                                </td>
                            </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
</div>