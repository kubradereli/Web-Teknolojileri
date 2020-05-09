<?php
include("bilgiler.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "HOŞGELDİNİZ b191210378<br><br>";
echo "<a href=logout.php>Siteye geri dön.</a>";
}
?>