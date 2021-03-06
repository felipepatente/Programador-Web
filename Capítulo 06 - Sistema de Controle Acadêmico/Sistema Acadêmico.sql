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


SELECT * FROM disciplina;


CREATE TABLE curso_disciplina(
	id_curso INT,
    id_disciplina INT,
    PRIMARY KEY (id_curso, id_disciplina),
    FOREIGN KEY (id_curso) REFERENCES curso (id_curso),
    FOREIGN KEY (id_disciplina) REFERENCES disciplina (id_disciplina)
);

SELECT * FROM curso_disciplina;


CREATE TABLE turma(
    id_turma INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina INT,
    id_professor INT,
    FOREIGN KEY (id_professor) REFERENCES professor(id_professor),
    FOREIGN KEY (id_disciplina) REFERENCES disciplina (id_disciplina)
);


SELECT * FROM turma;


CREATE TABLE aluno_turma(
	id_matricula INT,
    id_turma INT,
    PRIMARY KEY (id_matricula, id_turma),
    FOREIGN KEY (id_matricula) REFERENCES matricula(id_matricula),
    FOREIGN KEY (id_turma) REFERENCES turma (id_turma)
);

SELECT * FROM aluno_turma;






