<?php
// include database connection file
include_once("../conn/koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id_user'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=user");
?>
