CREATE TABLE users(
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
	user_first_name varchar(256) not null,
	user_last_name varchar(256) not null,
	user_email varchar(256) not null,
	user_uid varchar(256) not null,
	user_pwd varchar(256) not null
);