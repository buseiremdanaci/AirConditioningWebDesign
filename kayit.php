<?php
include("ayar.php");
$modelno = $_POST["model_no"];
$urunadi = $_POST["urun_adi"];
$stokdurum = $_POST["stok_durum"];
$fotograf = $_POST["fotograf"];
mysqli_select_db($conn, $db_name);

$sql = "INSERT INTO urun(model_no,urun_adi,stok_durum,fotograf) VALUES('$modelno','$urunadi','$stokdurum','$fotograf')";
$query = mysqli_query($conn, $sql);
if (!$query) {
    Header("Location:admin.php?durum=ok");
} else {
    Header("Location:admin.php?durum=ok");
}

?>
