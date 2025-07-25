<?php


class Aluno
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getAll($search = null)
    {
        if ($search) {
            $stmt = $this->db->prepare("
                SELECT * FROM alunos 
                WHERE nome LIKE ? OR email LIKE ?
            ");
            $like = '%' . $search . '%';
            $stmt->execute([$like, $like]);
        } else {
            $stmt = $this->db->query("SELECT * FROM alunos");
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM alunos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nome, $email, $data)
    {
        $stmt = $this->db->prepare("
            INSERT INTO alunos (nome, email, data_nascimento) 
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$nome, $email, $data]);
    }

    public function update($id, $nome, $email, $data)
    {
        $stmt = $this->db->prepare("
            UPDATE alunos SET nome = ?, email = ?, data_nascimento = ? 
            WHERE id = ?
        ");
        return $stmt->execute([$nome, $email, $data, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM alunos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}