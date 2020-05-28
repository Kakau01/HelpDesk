create database helpdesk;
use helpdesk;
create table TB_Usuario(
	Id_Usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome  VARCHAR(50) NOT NULL,
    Email VARCHAR(200) NOT NULL,
    Senha VARCHAR(50) NOT NULL
);
INSERT INTO TB_Usuario(Nome, Email, Senha) VALUES ('Pamela', 'pamela@email.com', '123456');
INSERT INTO TB_Usuario(Nome, Email, Senha) VALUES ('Claudia', 'claudia@email.com', '123456');
INSERT INTO TB_Usuario(Nome, Email, Senha) VALUES ('Jayjay', 'jay@email.com', '123456');

SELECT Id_Usuario FROM tb_usuario where Nome = 'Jay';

create table TB_ticket(
	Id_ticket INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Created_by VARCHAR(200) NOT NULL,
    Priority_ticket VARCHAR(200) NOT NULL,
    Area_ticket VARCHAR(200) NOT NULL,
    Subject_ticket VARCHAR(200) NOT NULL,
    Description_ticket VARCHAR(500) NOT NULL,
    Status_ticket VARCHAR(50) NOT NULL,
    Admin_name VARCHAR(100) NOT NULL,
    Admin_resposta VARCHAR(50) NOT NULL,
    Data_ticket DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    Id_Usuario INT
);
ALTER TABLE TB_ticket ADD constraint foreign key (Id_Usuario) REFERENCES TB_Usuario(Id_Usuario);

INSERT INTO TB_ticket(Created_by, Priority_ticket, Area_ticket,Subject_ticket,Description_ticket,Id_Usuario) VALUES ('Pamela', 'High', 'Area 3','Problema','Deu Ruim',1);
INSERT INTO TB_ticket(Created_by, Priority_ticket, Area_ticket,Subject_ticket,Description_ticket,Id_Usuario) VALUES ('Claudia', 'High', 'Area 3','Problema','Deu Ruim',3);


SELECT Created_by FROM TB_ticket where Id_Usuario = 3;
SELECT * FROM TB_Usuario INNER JOIN TB_ticket  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario;
SELECT Id_ticket FROM TB_ticket INNER JOIN TB_Usuario  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email ='claudia@email.com';

select * fROM TB_TICKET;  
UPDATE TB_ticket set Status_Ticket = 'Closed' WHERE Id_ticket = '11';
SELECT * FROM TB_ticket INNER JOIN TB_Usuario  ON TB_Usuario.Id_Usuario = TB_ticket.Id_Usuario WHERE Email = 'pamela@email.com'AND Id_Ticket = '1';

select * FROM TB_USUARIO;
SELECT * FROM TB_ticket WHERE Status_ticket = 'Closed';
SELECT * FROM TB_ticket INNER JOIN TB_Usuario WHERE Status_ticket = 'Closed' AND Email = 'claudia@email.com';


