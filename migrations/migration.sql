-- Criação do banco (opcional)
CREATE DATABASE IF NOT EXISTS bankmanager CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE bankmanager;

-- Tabela de administradores
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL
);

-- Tabela de áreas de cursos
CREATE TABLE areas_curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT
);

-- Tabela de cursos
CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    area_id INT NOT NULL,
    FOREIGN KEY (area_id) REFERENCES areas_curso(id) ON DELETE CASCADE
);

-- Tabela de alunos
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL
);

-- Tabela de matrículas
CREATE TABLE matriculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    curso_id INT NOT NULL,
    data_matricula DATE NOT NULL,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
);

-- Admin padrão (opcional)
INSERT INTO admins (email, senha_hash)
VALUES ('admin@admin.com', '$2y$10$4JZuYIuBvD2LOdK3ABsWdePZtNWiOHOjHJruUgOayG/vJMTu7LLvC');