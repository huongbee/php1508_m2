<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bai2.css"  rel="stylesheet" >
    <title>Bài 2</title>
</head>
<?php

$mangsp = array(
    "1"=>array("TenSP"=>"iPhone X","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/93709/iphone-7-plus-red-128gb-400x460.png","Gia"=>30000000),
    "2"=>array("TenSP"=>"iPhone 6","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>40000000),
    "3"=>array("TenSP"=>"iPhone 7","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/73703/iphone-6s-128gb-hong-1-400x450.png","Gia"=>50000000),
    "4"=>array("TenSP"=>"iPhone 8","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-400x460.png","Gia"=>60000000),
    "5"=>array("TenSP"=>"iPhone 9","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>70000000),
    "6"=>array("TenSP"=>"iPhone X","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/103241/htc-u11-1-400x460.png","Gia"=>80000000)
);


echo number_format(99999999999);

?>

<?php echo 121;?>

<?= 121?>
<body>
    <div class="container">

            <?php
            foreach($mangsp as $sanpham):
            ?>
                    <div class="sanpham">
                        <div class="hinh">
                            <img src='<?= $sanpham['Hinh'] ?>'>
                        </div>
                        <div class="desc">
                            <h2><?= $sanpham['TenSP'] ?></h2>
                            <p>Camera chuyên chụp đêm</p>
                            <p>Camera chuyên chụp đêm</p>
                            <p id="khuyenmai">Khuyến mãi</p>
                            <p>Giá tốt: 12345</p>
                            <p>Giá tốt: 12345</p>
                        </div>
                        <div class="name"><?= $sanpham['TenSP'] ?></div>
                        <div class="price"><?= number_format($sanpham['Gia']) ?> đ</div>
                    </div>
        <?php
            endforeach
        ?>
    	

    </div>
</body>
</html>