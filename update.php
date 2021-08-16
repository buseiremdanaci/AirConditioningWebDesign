<?php
include 'ayar.php';
mysqli_select_db($conn, $db_name);
$modelno = $_POST["model_no"];
$urunadi = $_POST["urun_adi"];
$stokdurum = $_POST["stok_durum"];
$fotograf = $_POST["fotograf"];
$sql = "UPDATE urun SET model_no = '$modelno', urun_adi='$urunadi', stok_durum='$stokdurum',fotograf='$fotograf' WHERE model_no= '$modelno'";
$query = mysqli_query($conn,$sql);
if(!$query)
{
    Header("Location:admin.php?durum=no");
}
else
{
    Header("Location:admin.php?durum=ok");
}
?>