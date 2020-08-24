<?php
session_start();
ob_start();
include 'veri.php';
if (isset($_POST)){
    $isim=$_POST["isim"];
    $temsilci=$_POST["temsilci"];
    $telefon=$_POST["telefon"];
    $ip=$_POST["ip"];
$kullanici=$_POST["kullanici"];
$sifre=$_POST["sifre"];


    if (isset($_POST["id"])){
    $id=$_POST["id"];
    $sql=mysqli_query($db,"update firmalar set isim='$isim' ,kullanici_adi='$kullanici',sifre='$sifre', temsilci='$temsilci' , telefon='$telefon' , ip='$ip' where id='$id' ");
        if (!$sql){
            $_SESSION["duzenle"]="hatali";
            header('Location:main');
        }
        else{
            $_SESSION["duzenle"]="basari";
            header('Location:main');
        }
    }



    else {
    $sql=mysqli_query($db,"INSERT INTO firmalar (isim,kullanici_adi,sifre,temsilci,telefon,ip) VALUES ('$isim','$kullanici','$sifre','$temsilci','$telefon','$ip')");
if (!$sql){
    $_SESSION["kayit"]="hatali";
    header('Location:edit');
}
else{
    $_SESSION["kayit"]="basari";
    header('Location:edit');
}
    }

}
?>