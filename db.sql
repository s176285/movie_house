create database db;
use db;

create table user  (
  user_name varchar(25) not null primary key,
  pass char(50) not null,
  email varchar(50) not null
);

create table tab  (
  user_name varchar(25) not null,
  url varchar(255) not null,
  index (user_name),
  index (url),
  primary key (user_name, url)
);

grant select, insert, update, delete
on db.*
to user@localhost identified by 'pass';
