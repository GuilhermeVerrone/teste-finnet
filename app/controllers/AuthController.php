<?php

require_once '../app/models/Admin.php';

class AuthController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new Admin($conn);
    }

    public function loginForm()
    {
        include '../app/views/auth/login.php';
    }

    public function login()
    {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $stmt = $this->model->getByEmail($email);

        if ($stmt && password_verify($senha, $stmt['senha_hash'])) {
            $_SESSION['admin'] = $stmt['email'];
            header('Location: /');
        } else {
            echo "❌ Credenciais inválidas!";
        }
    }
    public function logout()
    {
        session_destroy(); // Encerra a sessão atual
        header('Location: /login'); // Redireciona para a página de login
        exit;
    }
}
