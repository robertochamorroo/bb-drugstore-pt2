CREATE DATABASE banco_teste;

USE banco_teste;

CREATE USER 'bernardo'@'localhost' IDENTIFIED BY 'senha123';

GRANT ALL PRIVILEGES ON banco_teste.* TO 'bernardo'@'localhost';

CREATE TABLE usuario (
  idUsuario INT PRIMARY KEY AUTO_INCREMENT,
  nomeUsuario VARCHAR(255) NOT NULL,
  senhaUsuario VARCHAR(255) NOT NULL,
  emailUsuario VARCHAR(255) NOT NULL
);

CREATE TABLE produto (
  idProduto INT PRIMARY KEY AUTO_INCREMENT,
  nomeProduto VARCHAR(255) NOT NULL,
  precoProduto DECIMAL(9,2) NOT NULL,
  quantidadeProduto INT
);

CREATE TABLE venda (
  idVenda INT PRIMARY KEY AUTO_INCREMENT,
  dataVenda DATE,
  valorVenda DECIMAL(9,2),
  quantidadeVenda INT,
  idProduto INT,
  FOREIGN KEY (idProduto) REFERENCES produto(idProduto)
);

CREATE TABLE promocao (
  idPromocao INT PRIMARY KEY AUTO_INCREMENT,
  descricaoPromo TEXT,
  valor_min DECIMAL(9,2),
  descontoPromo DECIMAL(9,2)
);

