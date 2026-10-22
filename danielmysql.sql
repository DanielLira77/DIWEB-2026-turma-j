DROP SCHEMA IF EXISTS academia_avaliacao;

CREATE SCHEMA academia_avaliacao;

USE academia_avaliacao;

CREATE TABLE alunos (
    id_aluno INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_aluno)
);

CREATE TABLE planos (
    id_plano INT NOT NULL AUTO_INCREMENT,
    nome_plano VARCHAR(50) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id_plano)
);

CREATE TABLE matriculas (
    id_matricula INT NOT NULL AUTO_INCREMENT,
    id_aluno INT NOT NULL,
    id_plano INT NOT NULL,
    data_matricula DATE NOT NULL,
    PRIMARY KEY (id_matricula),
    FOREIGN KEY (id_aluno) REFERENCES alunos(id_aluno),
    FOREIGN KEY (id_plano) REFERENCES planos(id_plano)
);

SHOW TABLES; 
DESCRIBE alunos;
DESCRIBE planos;
DESCRIBE matriculas;

INSERT INTO alunos (nome, idade, telefone) VALUES
('Ana Souza', 22, '61999990001'),
('Carlos Lima', 28, '61999990002'),
('Mariana Alves', 25, '61999990003');

INSERT INTO planos (nome_plano, valor) VALUES
('Mensal', 100.00),
('Trimestral', 270.00),
('Anual', 960.00);

INSERT INTO matriculas (id_aluno, id_plano, data_matricula) VALUES
(1, 1, '2026-10-21'),
(2, 2, '2026-10-21'),
(3, 3, '2026-10-21');

SELECT * FROM alunos; 
SELECT * FROM planos; 
SELECT * FROM matriculas;

ALTER TABLE alunos ADD email VARCHAR(100);

DESCRIBE alunos;

UPDATE planos 
SET valor = 120.00 
WHERE nome_plano = 'Mensal';

SELECT * FROM planos;

INSERT INTO alunos (nome, idade, telefone) 
VALUES ('Pedro Martins', 30, '61999990004');

DELETE FROM alunos 
WHERE nome = 'Pedro Martins';

SELECT * FROM alunos;

CREATE TABLE teste (
    id_teste INT NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(100),
    PRIMARY KEY (id_teste)
);

SHOW TABLES;
DROP TABLE teste;
SHOW TABLES;
SELECT * FROM alunos;
SELECT * FROM planos;
SELECT * FROM matriculas;