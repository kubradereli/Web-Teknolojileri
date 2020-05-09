<?php
session_start();
ob_start();
session_destroy();
echo "ÇIKIŞ YAPTINIZ.<br><br>Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=login.html");
ob_end_flush();
?>