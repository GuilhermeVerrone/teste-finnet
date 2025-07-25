<?php

require_once '../app/models/AreaCurso.php';

class AreaCursoController
{
    private $model;

    public function __construct($conn)
    {
        $this->model = new AreaCurso($conn);
    }

    public function index()
    {
        $areas = $this->model->getAll();
        include '../app/views/areas/index.php';
    }

    public function create()
    {
        include '../app/views/areas/create.php';
    }

    public function store()
    {
        $titulo = $_POST['titulo'] ?? '';
        $descricao = $_POST['descricao'] ?? '';

        if (empty($titulo)) {
            echo "Título é obrigatório!";
            return;
        }

        $this->model->create($titulo, $descricao);
        header('Location: /areas');
        exit;
    }

    public function edit($id)
    {
        $area = $this->model->getById($id);
        include '../app/views/areas/edit.php';
    }

    public function update($id)
    {
        $titulo = $_POST['titulo'] ?? '';
        $descricao = $_POST['descricao'] ?? '';

        $this->model->update($id, $titulo, $descricao);
        header('Location: /areas');
        exit;
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /areas');
        exit;
    }
}
