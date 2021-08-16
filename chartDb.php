<?php
$servername = "localhost";
$username="root";
$password="123456";
$dbname="uyelik";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM urun";
$result = $conn -> query($sql);
if($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        $arr = array(
            'name' => $row['urun_adi'],
            'data' => array_map('intval',explode(',',$row['resim']))
        );
        $series_array[]= $arr;
    }
    return json_encode($series_array);
}else{
echo "0 result";
}
$db ->close();
?>