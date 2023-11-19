/*CRIAR CONEXAO COM PHP*/
 create database pwii;
 use pwii;
 
 create table amigo (
 idamigo int (11) not null auto_increment,
 nome varchar (45) not null,
 aprelido varchar (45) not null,
 email varchar(45) not null,
 PRIMARY KEY (`idamigo`)
 );
 select * from amigo;
 
 alter table amigo
add column apelido varchar (45);

ALTER TABLE amigo DROP COLUMN aprelido;
describe amigo;
