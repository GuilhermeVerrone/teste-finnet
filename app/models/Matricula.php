<?php

namespace App\Models;

class Matricula
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAll()
    {
        $stmt = $this->db->query("
            SELECT m.id, a.nome AS aluno, c.titulo AS curso, m.data_matricula
            FROM matriculas m
            JOIN alunos a ON m.aluno_id = a.id
            JOIN cursos c ON m.curso_id = c.id
            ORDER BY m.data_matricula DESC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($aluno_id, $curso_ids)
    {
        foreach ($curso_ids as $curso_id) {
            $stmt = $this->db->prepare("
                INSERT INTO matriculas (aluno_id, curso_id, data_matricula)
                VALUES (?, ?, ?)
            ");
            $stmt->execute([$aluno_id, $curso_id, date('Y-m-d')]);
        }
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM matriculas WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM matriculas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $aluno_id, $curso_id)
    {
        $stmt = $this->db->prepare("
            UPDATE matriculas SET aluno_id = ?, curso_id = ?
            WHERE id = ?
        ");
        return $stmt->execute([$aluno_id, $curso_id, $id]);
    }
}
