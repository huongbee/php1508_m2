<?php
session_start();
session_destroy();
setcookie('monhoc','',time()-120);
echo 'Đã đăng xuất';
header("refresh:5;url=login.php")
?>