create database pizzaria;

use pizzaria;

create table pedido (
 codPedido int key auto_increment,
 nome varchar(60),
 endereco varchar(100),
 celular char(11),
 pizza varchar(80),
 quantidade int
);

insert into pedido (nome, endereco, celular, pizza, quantidade) 
values 
  ("Guilherme Flávio", "Rua Tambaú - 81", "199875-7293", "Mussarela", 2),
  ("Guilherme Dionísio", "Rua Ave Maria - 66", "199894-8091", "Calabresa", 1),
  ("Thiago Fukuyama", "Rua Aoba - 74", "199887-6457", "Chinesa", 3),
  ("Matheus Leôncio", "Rua Bom Senhor do Bom Fim - 22", "199982-9835", "Frango com catupiry", 2);

select * from pedido;