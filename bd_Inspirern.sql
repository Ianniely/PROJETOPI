create database bd_inspireRN;
use bd_inspireRN;

create table tb_cidades(
cid_codigo int primary key auto_increment not null,
cid_nome varchar(45) not null,
cid_clima text not null,
cid_descricao text not null, 
cid_populacao varchar(45) not null
);

create table tb_restaurantes(
res_codigo int primary key auto_increment not null,
res_nome varchar(45) not null,
res_bairro varchar(45) not null,
res_rua varchar(45) not null,
res_numero varchar(45) not null,
res_horario_abertura time not null,
res_horario_fechamento time not null,
res_valor_medio varchar(45) not null,
res_classificacao varchar(45) not null,
res_tipo_culinaria varchar(45) not null,
res_acessibilidade varchar(45) not null,
res_descricao text,
res_cid_codigo int,
foreign key(res_cid_codigo) references tb_cidades(cid_codigo)
);

create table tb_hospedagens(
hos_codigo int primary key auto_increment not null,
hos_nome varchar(45) not null,
hos_bairro varchar(45) not null,
hos_rua varchar(45) not null,
hos_numero varchar(45) not null,
hos_telefone varchar(45) not null,
hos_email varchar(45) not null,
hos_valor varchar(45) not null,
hos_acessibilidade varchar(45) not null,
hos_classificacao varchar(45) not null,
hos_descricao text,
hos_cid_codigo int,
foreign key(hos_cid_codigo) references tb_cidades(cid_codigo)
);

create table tb_pontos_turisticos(
pot_codigo int primary key auto_increment not null,
pot_nome varchar(45) not null,
pot_bairro varchar(45) not null,
pot_rua varchar(45) not null,
pot_classificacao varchar(45) not null,
pot_acessibilidade varchar(45) not null,
pot_descricao text,
pot_cid_codigo int,
foreign key(pot_cid_codigo) references tb_cidades(cid_codigo)
);

create table tb_clientes(
cli_codigo int primary key auto_increment not null,
cli_nome varchar(45) not null,
cli_estado varchar(45),
cli_cidade varchar(45),
cli_telefone varchar(45),
cli_tipo varchar(45),
cli_email varchar(90) not null,
cli_senha varchar(120) not null
);
