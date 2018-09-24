create table anuncio(
     id int auto_increment primary key,
     nome varchar(150) not null,
     email varchar(100) not null,
     titulo varchar(100) not null,
     descricao varchar(256) not null,
     preco float not null,
     foto varchar(256) not null,
     telefone varchar(200) not null,
     data_anuncio TIMESTAMP not null,
     valido tinyint not null
);

create table usuario( id int auto_increment primary key,
     nome varchar(100),
     login varchar(15),
     senha varchar(100)
);
