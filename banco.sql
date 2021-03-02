create table ecommerce.produtos
(
    id          int auto_increment
        primary key,
    name        varchar(71)  not null,
    description varchar(500) not null,
    category_id int          not null,
    price       int          not null,
    price_share int          null,
    image       varchar(100) not null,
    reference   varchar(255) not null,
    voltagem    varchar(10)  not null,
    peso        int          not null,
    formato     int          not null,
    altura      int          not null,
    largura     int          not null,
    diametro    int          not null
);