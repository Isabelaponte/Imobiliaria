create database bd_imobiliaria;
use bd_imobiliaria;

create table inquilinos (
cod_inquilino int not null auto_increment,
cpf int(11) not null, 
nome varchar(50) not null,
email varchar(50) not null,
senha varchar(12) not null,
primary key (cod_inquilino)
);

create table imovel(
cod_imovel int not null auto_increment,
end varchar(50) not null,
cep int(8) not null,
cidade varchar(50) not null,
status_aluguel varchar(20),
status_venda varchar(20),
valor_aluguel varchar(10), 
valor_venda varchar(10), 
tipo varchar(15) not null,
primary key (cod_imovel)
);

create table corretor(
cod_corretor int not null auto_increment,
nome varchar(50) not null,
email varchar(50) not null,
celular int(15) not null,
primary key (cod_corretor)
);

create table proprietario(
cod_prop int not null auto_increment,
cpf int(11) not null,
nome varchar(50) not null,
email varchar(50) not null,
telefone int(15) not null,
senha int(10) not null,
primary key(cod_prop)
);


