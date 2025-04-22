drop if exists database test;
create database test;
use test;

create table users (
    id int auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null unique,
    image varchar(255) not null,
    password varchar(255) not null,
    created_at timestamp default current_timestamp
);