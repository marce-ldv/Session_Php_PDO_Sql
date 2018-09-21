create database dbusers;
use dbusers;

create table users(
    id bigint auto_increment,
    username varchar(50),
    pass varchar(50),
    constraint pk_id_users primary key (id)
);

INSERT InTO users (username,pass) VALUES ("marcelo","123");
SELECT * FROM users;