create database pizzaria;

create table pedido (
    codpedido int key auto_increment,
    nome varchar (60),
    endereco varchar (100),
    celular char (11),
    pizza varchar (60), 
    quantidade int
);

select * from pedido;