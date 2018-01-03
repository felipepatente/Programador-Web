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


CREATE TABLE professor(
	
    id_professor INT PRIMARY KEY AUTO_INCREMENT,
    cpf VARCHAR(100) NOT NULL,
    nome VARCHAR (100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    complemento VARCHAR(100),
    cep CHAR(8),
    bairro VARCHAR(25) NOT NULL,
    cidade VARCHAR(50) NOT NULL,    
    estado CHAR(2) NOT NULL,
    telefone CHAR(11),
    formacao VARCHAR(25),
    titulacao VARCHAR(10)
);

SELECT * FROM professor;


CREATE TABLE curso(
	
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    duracao VARCHAR(100),
    coordenador INT NOT NULL,
    nivel VARCHAR(25),
    modalidade VARCHAR(50),
    
    FOREIGN KEY (coordenador) REFERENCES professor(id_professor)
);

SELECT * FROM curso;


CREATE TABLE matricula(
	id_matricula INT PRIMARY KEY AUTO_INCREMENT,
    id_curso INT NOT NULL,
    id_aluno INT NOT NULL,
    
    FOREIGN KEY (id_aluno) REFERENCES aluno(id_aluno),
    FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);

SELECT * FROM matricula;


CREATE TABLE disciplina(
	id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    carga_horaria INT,
    creditos INT,
    ementa VARCHAR(100)
);












