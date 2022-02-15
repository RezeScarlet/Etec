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

insert into Pedido
values
    (1, "Thiago", "Mococa", "12345678901", "Calabresa", 1),
    (2, "GuilhermeS", "São Paulo", "23456789012", "4 Queijos", 2),
    (3, "Matheus", "Campinas", "34567890123", "Frango",3),
    (4, "GuilhermeF", "Rio de Janeiro", "56789012341", "Chocolate", 4);
    
select * from Pedido;