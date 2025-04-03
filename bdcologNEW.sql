DROP DATABASE IF EXISTS bdcolog;
CREATE DATABASE bdcolog;
USE bdcolog;

CREATE TABLE usuarios (
    uid INT PRIMARY KEY AUTO_INCREMENT,
    pg VARCHAR(255),
    nome VARCHAR(255),
    senha VARCHAR(255),
    adm VARCHAR(255) DEFAULT 'nao',
    funcao VARCHAR(255),
    email VARCHAR(100) UNIQUE
);

CREATE TABLE loglogin ( 
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario varchar (255),
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE efetivo (
    eid INT PRIMARY KEY AUTO_INCREMENT,
    participantes TEXT,
    participantesEb INT UNSIGNED DEFAULT 0,
    participantesMb INT UNSIGNED DEFAULT 0,
    participantesFab INT UNSIGNED DEFAULT 0,
    participantesOs INT UNSIGNED DEFAULT 0,
    participantesGov INT UNSIGNED DEFAULT 0,
    participantesPv INT UNSIGNED DEFAULT 0,
    participantesCv INT UNSIGNED DEFAULT 0
);

CREATE TABLE operacao (
    opid INT PRIMARY KEY AUTO_INCREMENT,
    operador VARCHAR(255),
    operacao VARCHAR(350),
    estado VARCHAR(350),
    missao TEXT,
    cma VARCHAR(100),
    rm VARCHAR(50),
    comandoOp VARCHAR(150),
    comandoApoio VARCHAR(150),
    tipoop varchar (255),
    inicioOp DATE,
    fimOp DATE
);

CREATE TABLE tipoOp (
    tid INT PRIMARY KEY AUTO_INCREMENT,
    tipoOp VARCHAR(225),
    acaoOuApoio VARCHAR(225),
    transporte VARCHAR(255),
    manutencao VARCHAR(255),
    aviacao VARCHAR(255),
    suprimento VARCHAR(255),
    desTransporte TEXT,
    desManutencao TEXT,
    desSuprimento TEXT,
    desAviacao TEXT
);

CREATE TABLE recursos (
    rid INT PRIMARY KEY AUTO_INCREMENT,
    recebidos DECIMAL(15,2) DEFAULT 0,
    descentralizados DECIMAL(15,2) DEFAULT 0,
    liquidados DECIMAL(15,2) DEFAULT 0,
    devolvidos DECIMAL(15,2) DEFAULT 0
);

CREATE TABLE infos (
    iid INT PRIMARY KEY AUTO_INCREMENT,
    sintaseOp TEXT,
    outrasInfos TEXT
);

CREATE TABLE anexos (
    aid INT PRIMARY KEY AUTO_INCREMENT,
    relatorioFinal VARCHAR(255),
    relatorioComando VARCHAR(255),
    fotos VARCHAR(255),
    outrosDocumentos VARCHAR(255)
);

CREATE TABLE logins (
    lid INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255),
    operacao varchar(255),
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);
