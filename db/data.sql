CREATE USER 'thelittleprince'@'172.17.0.1' IDENTIFIED BY 'thelittleprincebehide';
GRANT ALL PRIVILEGES ON *.* TO 'thelittleprince'@'172.17.0.1' WITH GRANT OPTION;

CREATE TABLE `users`
(
    `user_id`  int         NOT NULL AUTO_INCREMENT COMMENT '유저 식별값',
    `username` varchar(30) NOT NULL COMMENT 'plastic',
    `password` varchar(50) NOT NULL COMMENT 'plastic1234password!1234freeu@try',
    PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='유저';


-- plastic, efef 인 유저 를 한 명 넣어야함 
INSERT INTO `users` ( username, password ) VALUES ('plastic', 'plastic1234password!1234freeu@try');