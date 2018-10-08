create table anuncio(
     id int auto_increment primary key,
     nome varchar(150) not null,
     email varchar(100) not null,
     titulo varchar(100) not null,
     descricao blob not null,
     preco float not null,
     foto varchar(256) not null,
     telefone varchar(200) not null,
     data_anuncio TIMESTAMP not null,
     valido tinyint not null
);

create table usuario( 
    id int auto_increment primary key,
    nome varchar(100),
    login varchar(15),
    senha varchar(61),
    adm tinyint
);

create table acoes( 
    id int auto_increment primary key,
    titulo varchar(100),
    data date,
    arquivo varchar(100)
);

create table midia(
    id int auto_increment primary key,
    titulo varchar(100),
    data date,
    capa varchar(100)
);

create table imagem_midia(
    id int auto_increment primary key,
    id_midia int,
    imagem varchar(100)
);
