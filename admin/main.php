<?php
session_start();
ob_start();
if (!$_SESSION["kullanici"]){
    header("Location:index");
}
require 'veri.php';
require 'header.php';
$gelenId="";
$gelen_url="";
if (isset($_GET["gelenUrl"])){
    $gelen_url=$_GET["gelenUrl"];
}


if (isset($_GET["id"])){
    $gelenId=$_GET["id"];
}

switch ($gelen_url){

    case "main":
        require_once 'data_table.php';
        break;
    case "edit":
        require_once "edit_page.php";
        break;
    default:
        require_once 'data_table.php';

}

require 'footer.php';
ob_flush();
?>
