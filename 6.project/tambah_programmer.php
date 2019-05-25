<?php
include "koneksi.php";
$nama = $_POST["nama"];
$koneksi->query("Insert into users (id,name) values('','$nama')");
echo "<script>document.location='index.php'</script>";
