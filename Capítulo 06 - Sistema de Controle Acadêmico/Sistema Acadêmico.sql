CREATE TABLE aluno(
	
    id_aluno INT PRIMARY KEY AUTO_INCREMENT,
    cpf VARCHAR(100) NOT NULL,
    nome VARCHAR (100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    complemento VARCHAR(100),
    cep CHAR(8),
    bairro VARCHAR(25) NOT NULL,
    cidade VARCHAR(50) NOT NULL,    
    estado CHAR(2) NOT NULL,
    telefone CHAR(11)
);

SELECT * FROM aluno;


