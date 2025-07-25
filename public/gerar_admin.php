<?php
require_once __DIR__ . '/../config/database.php';
$conn = require __DIR__ . '/../config/database.php';

$email = 'admin@admin.com';
$senha = '123456';

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Verifica se já existe
$stmt = $conn->prepare("SELECT id FROM admins WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->fetch()) {
    echo "⚠️ Admin já existe com o email: $email\n";
    exit;
}

// Insere novo admin com hash seguro
$stmt = $conn->prepare("INSERT INTO admins (email, senha_hash) VALUES (?, ?)");
$success = $stmt->execute([$email, $senha_hash]);

if ($success) {
    echo "✅ Administrador criado com sucesso!\nEmail: $email\nSenha: $senha\n";
} else {
    echo "❌ Erro ao criar administrador.\n";
}