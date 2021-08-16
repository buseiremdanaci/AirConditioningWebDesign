//Kullanıcı giriş veri bağlantısı
<?php
try {
	$db=new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8",'root','123456');
    }
catch (PDOExpception $e)
    {
	echo $e->getMessage();
     }
 ?>