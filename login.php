<?php
include("bilgiler.php");
session_start();
ob_start();
if(($_POST["kullaniciAdi"]==$user) and ($_POST["sifre"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "KULLANICI ADINI VEYA ŞİFREYİ YANLIŞ GİRDİNİZ.<br><br>";
echo "Login sayfasına yönlendiriliyorsunuz...";
header("Refresh: 2; url=login.html");
}
ob_end_flush();
?>