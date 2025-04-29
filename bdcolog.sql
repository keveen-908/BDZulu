    drop database bdcolog;
    create database bdcolog;
    use bdcolog;

    create table usuarios(
        uid  int PRIMARY KEY  auto_increment,
        pg varchar (255),
        nome varchar (255),
        senha varchar (255),
        adm varchar (255) default 'usuario',
        funcao varchar (255),
        email varchar (100)
    );

    create table loglogin ( 
        usuario varchar (255),
        data datetime 
    );

    create table efetivo (
        eid  int PRIMARY KEY  auto_increment,
        participantes varchar(255),
        participantesEb BIGINT,
        participantesMb BIGINT,
        participantesFab BIGINT,
        participantesOs BIGINT,
        participantesGov BIGINT,
        participantesPv BIGINT,
        participantesCv BIGINT
    );

    create table operacao (
        opid int PRIMARY KEY auto_increment,
        operador varchar (255),
        operacao varchar (350),
        estado varchar (350),
        missao varchar (350),
        cma varchar (100),
        rm varchar (50),
        comandoOp varchar (199),
        comandoApoio varchar (200),
        tipoop varchar (255),
        status varchar (20) default 'incompleto',
        inicioOp date ,
        fimOp date
    );
        
    create table tipoOp (
        tid  int PRIMARY KEY  auto_increment,
        tipoOp varchar (225),
        acaoOuApoio varchar (225),
        transporte varchar (255) ,
        manutencao varchar (255) ,
        aviacao varchar (255) ,
        suprimento varchar (255) ,
        desTransporte varchar (255) ,
        desManutencao varchar (255) ,
        desSuprimento varchar (255) ,
        desAviacao varchar (255) 
    );
        
    create table recursos (
        rid  int PRIMARY KEY  auto_increment,
        recebidos float (255, 2),
        descentralizados float (255, 2),
        liquidados float (255, 2),
        devolvidos float (255, 2)
        );
        
    create table infos (
        iid  int PRIMARY KEY  auto_increment,
        sintaseOp varchar(255),
        outrasInfos varchar(255)
    );
        
    create table anexos (
        aid int primary key  auto_increment,
        relatorioFinal varchar (255),
        relatorioComando varchar (255) ,
        fotos varchar (255),
        outrosDocumentos varchar (255)
    );
    create table logins(
        lid int PRIMARY KEY  auto_increment,
        nome varchar(255),
        operacao varchar(255),
        data datetime
    );