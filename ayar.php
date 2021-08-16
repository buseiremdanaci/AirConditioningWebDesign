<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '123456';
$db_name = 'uyelik';
$vt=new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8",'root','123456');

$conn = mysqli_connect("localhost", "root", "123456", "uyelik");
if(!$conn) {
    echo "Unable to connect database".mysqli_error($conn);die;
            }
?>