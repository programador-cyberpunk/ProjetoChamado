CREATE DATABASE CrudProjeto;
use CrudProjeto;

CREATE TABLE usuarios(
  id int(11) NOT NULL,
  nome VARCHAR(200) NOT NULL,
  email VARCHAR(200) NOT NULL,
  senha VARCHAR(200) NOT NULL,
  setor VARCHAR(200) NOT NULL,
  ordem VARCHAR(200) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios (id, nome, email, senha, setor, ordem) VALUES
(7, 'Juliana Almeida', 'juliana.almeida@empresa.com', 'senha404', 'Suporte Técnico', 'tecnico'),
(8, 'Lucas Martins', 'lucas.martins@empresa.com', 'senha505', 'Recursos Humanos', 'usuario'),
(9, 'Tatiane Rocha', 'tatiane.rocha@empresa.com', 'senha606', 'Suporte Técnico', 'tecnico'),
(10, 'Felipe Gomes', 'felipe.gomes@empresa.com', 'senha707', 'Marketing', 'usuario'),
(11, 'Sofia Mendes', 'sofia.mendes@empresa.com', 'senha808', 'Marketing', 'usuario');