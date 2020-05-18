CREATE DATABASE db_projeto;

use db_projeto;

create table tb_produtos(
idProduto int primary key auto_increment,
productName varchar(100) not null,
about varchar(250) not null,
price varchar(100) not null,
category varchar(250) not null,
foto varchar(250) not null,
fk_idUser int,
ativo bool not null default true);


create table tb_pessoas(
idUser int primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(100) not null,
telefone varchar(100) not null,
rua varchar(100) not null,
cidade varchar(100) not null,
uf varchar(10) not null,
numero varchar(10) not null,
typeUser varchar(100) not null,
ativo bool default 1);

ALTER TABLE tb_produtos ADD CONSTRAINT fk_idUser FOREIGN KEY (fk_idUser) REFERENCES tb_pessoas (idUser);


drop table tb_pessoas;
drop table tb_produtos;

select * from tb_pessoas;
select * from tb_produtos;

select * from tb_produtos where fk_idUser = 2;


insert into tb_pessoas (nome, email, senha, telefone, rua, cidade, uf, numero, typeUser) values ('Hugo', 'Hugo@gmail.com', 'admin', '11999999', 'rua admin', 'admin', 'ad', '12', 'administrador');
insert into tb_produtos (productName, about, price, category, foto, fk_idUser) values ('Teste', 'teste', 'teste', 'teste','teste', '1');

