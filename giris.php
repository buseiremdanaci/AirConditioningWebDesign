<?php 
include("baglan.php");
ob_start();
session_start();
$kadi = $_POST['kadi'];
$sifre = $_POST['pw'];
    $kullanicisor=$db->prepare("select * from uye where uye_mail=:mail  and uye_pw=:password ");
    $kullanicisor->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));
    $say=$kullanicisor->rowCount();
    if ($say==1 and $kadi=='admin@gmail.com') {
        echo $_SESSION['userkullanici_mail']=$kadi;
        header("Location:admin.php");
        exit;
    } if($say==1){
    echo $_SESSION['userkullanici_mail']=$kadi;
        header("Location:Anasayfa.html");
        exit;
    }else {
        header("Location:../../?durum=basarisizgiris");
            }
 ?>