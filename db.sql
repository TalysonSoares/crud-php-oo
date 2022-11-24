CREATE DATABASE db_escola;

USE db_escola;

CREATE TABLE tb_alunos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    matricula VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    status TINYINT NOT NULL,
    genero  VARCHAR(20) NOT NULL,
    dataNascimento DATETIME NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL
);

CREATE TABLE tb_professores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    endereco VARCHAR(45) NOT NULL,
    formacao VARCHAR(45) NOT NULL,
    status TINYINT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL
);

INSERT INTO tb_alunos
(nome, matricula, email, status, genero, dataNascimento, cpf)
VALUES
('Maria', '123123120', 'maria@email.com', true, 'Feminino', '2001-09-12', '12345678911')
;

INSERT INTO tb_professores
(nome, endereco, formacao, status, cpf)
VALUES
('Alessandro', 'Rua barca velha 123', 'HTML, CSS, JS, React', true, '66666666666'),
('Allan', 'Rua idelfons albano 222', 'Sabe tudo, brabissimo', true, '99999999999'),
('Gleidson', 'Rua Oscar frança 88', 'EOQ', true, '12345678911')
;

