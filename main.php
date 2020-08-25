<?php
session_start();
ob_start();
include 'veri.php';
if (!$_SESSION["uye"]){
    header('Location:index');
}

$uye_id=$_SESSION["uye"];
$data=mysqli_fetch_array(mysqli_query($db,"select * from firmalar where id='$uye_id'"));


include 'header.php';
echo $data["ip"];
include 'footer.php';

?>