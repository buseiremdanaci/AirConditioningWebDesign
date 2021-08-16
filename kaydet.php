<?php 
include "baglan.php";
	$kaydet=$db->prepare("INSERT INTO uye SET
		uye_adi=:uye_adi,
		uye_mail=:uye_mail,
		uye_tel=:uye_tel,
		uye_adres=:uye_adres,
		uye_pw=:uye_pw 
		");
	$insert=$kaydet->execute(array(
		'uye_adi' => $_POST['kadi'],
		'uye_mail' => $_POST['mail'],
		'uye_tel' => $_POST['tel'],
		'uye_adres' => $_POST['adres'],
		'uye_pw' => $_POST['pw']
	));
	if ($insert) {
		Header("Location:Anasayfa.html?durum=ok");
	} else {
		Header("Location:Anasayfa.html?durum=no");
	}
?>