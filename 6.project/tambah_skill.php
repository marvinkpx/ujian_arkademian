<?php
include "koneksi.php";
$user_id = $_POST["id"];
$skill = $_POST["skill"];
$koneksi->query("Insert into skills (id,name,user_id) values('','$skill','$user_id')");
echo "<script>document.location='index.php'</script>";
