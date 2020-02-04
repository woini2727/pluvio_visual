create database notificaciones;

use notificaciones;

create table users(
  id int primary key auto_increment,
  Token varchar(200) not null
);
