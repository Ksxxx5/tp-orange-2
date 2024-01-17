DROP database IF EXISTS db_orange;
CREATE DATABASE db_orange;
USE db_orange;

create table Technicien (
    idtechnicien int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    specialite varchar(50),
    adresse varchar(100),
    telephone int(15),
    email varchar(50),
    mdp varchar(50),
    primary key (idtechnicien)

);

create table Client (
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(100),
    telephone int(15),
    email varchar(50),
    mdp varchar(50),
    statut varchar (50),
    primary key (idclient)
);

create table materiel (
    idmateriel int(3) not null auto_increment,
    nom varchar(50),
    marque varchar(50),
    modele varchar(50),
    type varchar(50),
    dateachat date,
    prix float,
    etat varchar(50),
    client_id int,
    primary key (idmateriel),
    foreign key (client_id) references client (idclient)

);

create table intervention (
    idintervention int(3) not null auto_increment,
    technicien_id int,
    materiel_id int,
    client_id int,
    dateInter date,
    description varchar(200),
    prix float,
    primary key (idintervention),
    foreign key (technicien_id) references technicien(idtechnicien),
    foreign key (materiel_id) references materiel(idmateriel),
    foreign key (client_id) references client(idclient)
);

create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(50),
    role enum('admin','technicien','client'),
    primary key (iduser)
);

insert into user value (null,'Adam','Kais','a@gmail.com','123','admin');
