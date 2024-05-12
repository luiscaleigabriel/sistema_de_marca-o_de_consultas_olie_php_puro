create database if not exists clinica default collate utf8_general_ci default charset utf8;

use clinica;

create table if not exists feedback (
	id int not null auto_increment,
    nome varchar(40) not null,
    email varchar(250) not null,
    mensagem text not null,
    primary key(id)
)default charset utf8;

create table if not exists marcacao (
	id int not null auto_increment,
    datamarcacao datetime not null,
    atoclinico varchar(100) not null,
    tipoconsulta varchar(150) not null,
    idpaciente int not null,
    idmedico int not null,
    primary key(id)
)default charset utf8;

create table if not exists medico (
	id int not null auto_increment,
    nome varchar(100) not null,
    email varchar(255) not null,
    especialidade varchar(150) not null,
    primary key(id)
)default charset utf8;

create table if not exists paciente (
	id int not null auto_increment,
    nome varchar(100) not null,
    endereco text not null,
    sexo set('M', 'F') not null,
    datanascimento date not null,
    telefone varchar(20) not null,
    email varchar(255) not null,
    primary key(id)
)default charset utf8;

create table if not exists usuario (
	id int not null auto_increment,
    nome varchar(100) not null,
    email varchar(255) not null,
    senha varchar(255) not null,
    primary key(id)
)default charset utf8;

alter table marcacao add foreign key(idpaciente) references paciente(id);
alter table marcacao add foreign key(idmedico) references medico(id);

insert into usuario (nome, email, senha) values 
('Jorge Mupembe', 'jorge@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu'),
('Laurindo Bala', 'laurindo@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu'),
('Virgilio', 'virgilio@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu');

insert into medico (nome, email, especialidade) values 
('Dr. Savannah Nguyem', 'savannah@gmail.com', 'Psiquiatra'),
('Dr. Laurindo Bala', 'bala@gmail.com', 'Médicina Interna'),
('Dr. Jhon Matheus', 'matheus@gmail.com', 'Neurologista'),
('Dr. Jorge Mupembe', 'mupembe@gmail.com', 'Cardiologista'),
('Dr. Virgilio Steward', 'steward@gmail.com', 'Pediatra'),
('Dr. Donana Lemos', 'donana@gmail.com', 'Médicina Familiar');
