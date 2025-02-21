create database if not exists person_db;
use person_db;

create table if not exists `users` (
    id int auto_increment primary key,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    dob date not null,
    phone_number varchar(15) not null unique,
    email varchar(100) not null unique
);

select * from users;