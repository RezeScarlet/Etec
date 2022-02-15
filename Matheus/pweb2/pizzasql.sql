create database pizzaria;

use pizzaria;

create table Pedido (
    codpedido int key auto_increment,
    nome varchar(60),
    endereco varchar(100),
    celular char(11),
    pizza varchar(80),
    quantidade int
);

insert into pedido (nome, endereco, celular, pizza, quantidade) 
values
("Matheus", "Mococa", "99999999999", "Queijo", 1),
("Thiago", "Minas Gerais", "99999999999", "Portuguesa", 5),
("Guilherme Souza", "Tambau", "99999999999", "Calabresa", 10),
("Guilherme Flavio", "Acre", "99999999999", "Chinesa", 50);

select * from Pedido;