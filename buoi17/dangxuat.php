<?php
session_start();
session_destroy();
setcookie('username','admin',time()-120);
setcookie('password','admin123',time()-120);
echo 'Đã đăng xuất';
header("refresh:5;url=login.php")
?>