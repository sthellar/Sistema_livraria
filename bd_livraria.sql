create database bd_livraria;

use bd_livraria;

create table tb_user(
id_user int auto_increment not null primary key,
nm_usuario varchar(45) not null,
nm_setor varchar(45) null,
login varchar(45) null,
senha varchar(45) null
) engine=innodb;

create table tb_cliente(
cd_cliente int auto_increment not null primary key,
nm_cliente varchar(45) null,
nm_endereco varchar(45) null,
nr_endereco varchar(45) null,
nr_cpf char(11) null,
nr_cnpj char(14) null,
nr_telefone varchar(11) null
) engine=innodb;

create table tb_compra(
cd_compra int auto_increment not null primary key,
dt_compra date null,
vl_compra decimal(6,2) null,
fk_cd_cliente int null,
foreign key (fk_cd_cliente) references tb_cliente (cd_cliente)
) engine=innodb;

create table tb_editora(
cd_editora int auto_increment not null primary key,
nm_editora varchar(45) null,
nm_endereco varchar(45) null,
nr_endereco varchar(45) null,
nm_bairro varchar(30) null,
nr_telefone varchar(11) null,
nm_gerente varchar(45) null
) engine=innodb;

create table tb_livro(
isbn_livro char(13) primary key not null,
nm_livro varchar(45) null,
nm_autor varchar(45) null,
ds_assunto varchar(45) null,
qt_estoque int null,
fk_cd_editora int null,
foreign key (fk_cd_editora) references tb_editora (cd_editora)
) engine=innodb;

create table tb_item_compra(
cd_item_compra varchar(45) not null primary key,
fk_cd_compra int null,
fk_isbn_livro char(13) null,
foreign key (fk_cd_compra) references tb_compra (cd_compra),
foreign key (fk_isbn_livro) references tb_livro (isbn_livro)
) engine=innodb;
