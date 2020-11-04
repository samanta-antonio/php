CREATE database `andromeda` ;

use andromeda;


create table produtos(
id int auto_increment,
categoria varchar(100),
descricao varchar(500),
preco float,
precoparcela float,
precovista float,
imagem varchar(100),
primary key (id)
)

SELECT * from andromeda.produtos;

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
values ("monoculos","Monóculo GSN 8X40 WA",310.00,310.00,300.00,"Imagens/monoculo.jpg");


insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
values ("monoculos","Monóculo SUMAX Mini Might 12X21",90.00,90.00,85.00,"Imagens/monoculomini.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
values ("binoculos","Binóculo SUMAX 10 50x50 BS Ventura - Profissional",470.00,470.00,450.00,"Imagens/binoculosumax.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("binoculos","Binóculo GSN 8X40 WA",450.00,450.00,440.00,"Imagens/binoculogsn.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("lunetas","Luneta SUMAX 25X30",265.00,265.00,260.00,"Imagens/lunerasumax.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("lunetas","Luneta SUMAX 25X30",265.00,265.00,260.00,"Imagens/telescopiosky.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("refletores","Telescópio Orion Dobsoniano",10500.00,10500.00,104000.00,"Imagens/telescopioorion.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("refratores","TelescÃ³pio Refrator 150mm Toya Pro Black Diamond",9000.00,9000.00,8778.00,"Imagens/telescopiorefrator.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("acessorios","Apontador de Astros Laser AA200",240.00,240.00,205.00,"Imagens/apontadorlaser.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("acessorios","Adaptador para Camera",190.00,190.00,180.00,"Imagens/adaptador.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("acessorios","Ocular Colimada Toya (1,25"") - Para Refratores",230.00,230.00,205.00,"Imagens/ocularcolimadora.jpg");

insert into produtos (categoria, descricao, preco, precoparcela, precovista, imagem)
value ("acessorios","Lente Inversora 1,5 - 35mm (1,25"") Para Refletores",80.00,80.00,76.00,"Imagens/lenteinversora.jpg");






