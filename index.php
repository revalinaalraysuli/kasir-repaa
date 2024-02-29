<?php
include("conn/koneksi.php");
include("header.php");
?>
<body>

<style>
    .main-content {
        margin-top: 60px;
    }
    .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
    }

    .card {
        margin-bottom: 20px;
    }
</style>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kasir</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
        <form class="d-flex" action="" method="POST">
                        <input class="form-control me-2" type="search" placeholder="cari menu..." aria-label="Search" name="search">
                        <button class="btn btn-outline-light" type="submit">Cari</button>
                    </form>
    </nav>

    <div class="main-content">
        <div class="card-container">
            <?php
            if(isset($_POST['search'])) {
                $search = $_POST['search'];
            $sql = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$search%'");
            while ($data= $sql->fetch_assoc()) { ?>
                <div class='card' style='width: 18rem; margin: 10px'>

                    <?php echo "<img class='card-img-top' src='foto/" .$data['foto'] . "' width='230' height='250'>"?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $data['nama_produk']?></h5>
                        <p class='card-text'>Harga: Rp.<?php echo number_format($data['harga']) ?></p>
                        <p class='card-text'>Stok: <?php echo $data['stok']?></p>
                        <a href='transaksi.php' class='btn btn-md btn-primary float-end'>Beli</a>
                    </div>

                </div>

                <?php
            }
            } else {
                $sql = $koneksi->query("SELECT * FROM produk ");
                while ($data= $sql->fetch_assoc()) {
            ?>
            <div class='card' style="width: 18rem; margin: 10px;">

            <?php echo "<img class='card-img-top' src='foto/" .$data['foto']."' width='230' height='250'>"; ?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $data['nama_produk']?></h5>
                        <p class='card-text'>Harga: RP.<?php echo number_format($data['harga']) ?></p>
                        <p class='card-text'>Stok: <?php echo $data['stok']?></p>
                        <a href='transaksi.php' class='btn btn-md btn-primary float-end'>Beli</a>
                    </div>
                
            </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
</body>