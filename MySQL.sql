CREATE TABLE users(
	id int(10),
	name varchar(100),
	email varchar(30),
	password varchar(100),
	birthday date
)

CREATE TABLE `php1508`.`product` (
 	`idSP` INT NOT NULL AUTO_INCREMENT COMMENT 'cột này là khóa chính' , 
 	`name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Tên sẩn phẩm' , 
 	`description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , 
 	`image` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
 	
 	PRIMARY KEY (`id`)
) 


ALTER TABLE users ADD address varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'chưa có địa chỉ' 


INSERT INTO `users` (`id`, `name`, `email`, `password`, `birthday`, `address`, `active`) VALUES (NULL, 'Khoa Phạm', 'khoa@gmail.com', '12345678', '2017-10-25', 'chưa có địa chỉ', '0');

INSERT INTO type_product(name,description,image) 
VALUES ('Sony', 
        'Công ty công nghiệp Sony, gọi tắt là Sony, là một tập đoàn đa quốc gia của Nhật Bản, với trụ sở chính nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử đứng thứ 5 thế giới với 81,64 tỉ USD',
        'https://www.sony.net/SonyInfo/CorporateInfo/img/sony-og.jpg'
        )

INSERT INTO type_product
VALUES (
	3,
	'Apple', 
    'Công ty công nghiệp Apple, gọi tắt là Apple, là một tập đoàn đa quốc gia của Nhật Bản, với trụ sở chính nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử đứng thứ 5 thế giới với 81,64 tỉ USD',
    'https://www.sony.net/SonyInfo/CorporateInfo/img/sony-og.jpg'
)

INSERT INTO type_product(name,description,image) 
VALUES ('Oppo', 
        'Công ty công nghiệp Oppo, gọi tắt là Oppo',
        'https://www.sony.net/SonyInfo/CorporateInfo/img/sony-og.jpg'
        ),
		('Vivo', 
        'Công ty công nghiệp Vivo',
        'https://www.sony.net/SonyInfo/CorporateInfo/img/sony-og.jpg'
        )



UPDATE type_product
SET image = 'http://drop.ndtv.com/TECH/product_database/images/913201720152AM_635_iphone_x.jpeg'
WHERE id=3


SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id=4 OR id=5

SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id=4 AND name='Vivo'


SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id IN (4,5)

SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id BETWEEN 4 AND 5

SELECT name,description,image 
FROM php1508_demo.type_product
LIMIT 3,2

SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id>3


INSERT INTO type_product(name,description,image)
SELECT name,description,image 
FROM php1508_demo.type_product
WHERE id>3

SELECT * FROM type_product WHERE name = "OPPO"


-- % : đại diện cho kí tự bất kì
SELECT * FROM type_product WHERE name LIKE "OPPO%"

SELECT * FROM type_product WHERE name LIKE "OPPO%" OR name LIKE "%OPPO"
-- <=>
SELECT * FROM type_product WHERE name LIKE "%OPPO%"



DELETE FROM type_product 
WHERE name like "%Vivo%" AND name NOT LIKE "Công ty Vivo"



SELECT * FROM type_product
WHERE name like "%Vivo%" OR description like "%Vivo%"

DELETE FROM type_product 
WHERE id IN (SELECT id FROM type_product WHERE name LIKE "%OPPO%" AND id != 10)