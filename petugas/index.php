<?php
session_start();
include "../conn/koneksi.php";

$User = $_SESSION['username'];
if ($_SESSION['username']=="") {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kasir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/bootstrap.min.css">
    <script src="../bootstrap-5.3.2-dist/jquery.min.js"></script>
    <script src="../bootstrap-5.3.2-dist/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 640px}
        
        
        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
            
        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
        .row.content {height: auto;} 
        }
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2><?php echo $_SESSION['level'] ; ?></p></h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="?page=stok">Stok</a></li>
        <li><a href="?page=user">User</a></li>
        <li><a href="?page=logout">Log Out</a></li>
      </ul><br>
    </div>
    <br>
    <div class="col-sm-9">
    <?php
            if (isset($_GET['page'])) {
                $laman = $_GET['page'];

                switch ($laman) {
                    case 'user':
                        include "user.php";
                        break;

                    case 'stok':
                        include "stok_barang.php";
                        break;

                    case 'logout':
                        include "logout.php";
                        break;
                
                    case 'tambah_user':
                        include "tambah_user.php";
                        break;

                    case 'hapus_user':
                         include "hapus_user.php";
                         break;
                    
                         case 'edit_user':
                            include "edit_user.php";
                            break;
                    
                     case 'tambah_barang':
                         include "tambah_barang.php";
                         break;
                    
                 
                    case 'hapus_barang':
                        include "hapus_barang.php";
                        break;
                        
                    case 'edit_barang':
                        include "edit_barang.php";
                        break;

                        case 'cari_menu':
                            include "cari_menu.php";
                            break;

                    default:
                        # code...
                        break;
                }
            }
            else {
                include "dashboard.php";
            }
        ?>
     </div>
  </div>
</div>

</body>
</html>
