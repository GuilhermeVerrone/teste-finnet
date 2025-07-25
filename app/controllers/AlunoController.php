<?php

require_once '../app/models/Aluno.php';

class AlunoController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new Aluno($conn);
    }

    public function index()
    {
        $search = $_GET['search'] ?? null;
        $alunos = $this->model->getAll($search);
        include '../app/views/alunos/index.php';
    }

    public function create()
    {
        include '../app/views/alunos/create.php';
    }

    public function store()
    {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $data = $_POST['data_nascimento'] ?? null;

        if (empty($nome) || empty($email)) {
            echo "Nome e e-mail são obrigatórios!";
            return;
        }

        $this->model->create($nome, $email, $data);
        header('Location: /alunos');
    }

    public function edit($id)
    {
        $aluno = $this->model->getById($id);
        include '../app/views/alunos/edit.php';
    }

    public function update($id)
    {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $data = $_POST['data_nascimento'] ?? null;

        $this->model->update($id, $nome, $email, $data);
        header('Location: /alunos');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /alunos');
    }
}
