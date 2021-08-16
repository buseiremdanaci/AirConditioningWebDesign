<?php
include("ayar.php");
$modelno = $_POST["model_no"];
mysqli_select_db($conn, $db_name);
$sql = "DELETE FROM urun WHERE model_no= '$modelno'";
$query = mysqli_query($conn, $sql);
if (!$query) {
    Header("Location:admin.php?durum=no");
} else {
    Header("Location:admin.php?durum=ok");
}
?>
