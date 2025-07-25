<?php

class Admin
{
    private $db;

    public function __construct($conn)
    {
        $this->db = $conn;
    }

    public function login($email, $senha)
    {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE email = ? AND senha_hash = ?");
        $stmt->execute([$email, md5($senha)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
