<?php


class AreaCurso
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * FROM areas_curso");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM areas_curso WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($titulo, $descricao)
    {
        $stmt = $this->db->prepare("INSERT INTO areas_curso (titulo, descricao) VALUES (?, ?)");
        return $stmt->execute([$titulo, $descricao]);
    }

    public function update($id, $titulo, $descricao)
    {
        $stmt = $this->db->prepare("UPDATE areas_curso SET titulo = ?, descricao = ? WHERE id = ?");
        return $stmt->execute([$titulo, $descricao, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM areas_curso WHERE id = ?");
        return $stmt->execute([$id]);
    }
}