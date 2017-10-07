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