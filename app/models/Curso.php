<?php

namespace App\Models;

class Curso
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAll()
    {
        $stmt = $this->db->query("
            SELECT cursos.*, areas_curso.titulo AS area
            FROM cursos
            JOIN areas_curso ON cursos.area_id = areas_curso.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM cursos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($titulo, $descricao, $area_id)
    {
        $stmt = $this->db->prepare("INSERT INTO cursos (titulo, descricao, area_id) VALUES (?, ?, ?)");
        return $stmt->execute([$titulo, $descricao, $area_id]);
    }

    public function update($id, $titulo, $descricao, $area_id)
    {
        $stmt = $this->db->prepare("UPDATE cursos SET titulo = ?, descricao = ?, area_id = ? WHERE id = ?");
        return $stmt->execute([$titulo, $descricao, $area_id, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM cursos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}