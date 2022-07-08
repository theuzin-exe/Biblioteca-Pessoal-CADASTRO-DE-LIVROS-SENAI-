create database biblioteca_pessoal
default character set utf8
default collate utf8_general_ci;

create table livro (
nome_livro varchar(60) not null,
preco varchar(60) not null,
ano varchar(45) not null,
genero varchar(45) not null,
nome_autor varchar(45) not null,
data_compra varchar(45) not null,
editora varchar(45) not null,
cod_livro int primary key not null auto_increment unique,
estante int not null,
prateleira_linha int not null,
posicao_ordem int not null );

