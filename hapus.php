<?php
include "../koneksi.php";
$id = $_GET["id"];
mysqli_query($koneksi,"delete from donasi where id='$id'");
header("location:index.php");
?>
