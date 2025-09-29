CREATE DATABASE form;
USE form;

CREATE TABLE Curso(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(100),
    Especialidade VARCHAR(100)
);

ALTER TABLE Curso ADD COLUMN Modulo VARCHAR(50);

 CREATE TABLE Candidato(
	Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(100),
    Curso_Id INT,
    Email VARCHAR(20),
    Sexo VARCHAR(10),
    Provincia VARCHAR(40),
    Data_De_Nascimento DATE,
    Fotografia VARCHAR(100)
 );