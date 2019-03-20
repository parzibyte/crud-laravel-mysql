/*
    Este esquema es por si no sabes manejar las migraciones
    Recomiendo ver database/migrations
*/
create database canciones_laravel;
use canciones_laravel;
create table canciones(
    id bigint unsigned not null auto_increment,
    nombre varchar(100) not null,
    artista varchar(100) not null,
    album varchar(50) not null,
    anio int unsigned not null,
    primary key(id)
);