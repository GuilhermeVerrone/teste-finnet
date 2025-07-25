<?php

require_once '../app/models/Curso.php';
require_once '../app/models/AreaCurso.php';

class CursoController
{
    private $model;
    private $areaModel;

    public function __construct($conn)
    {
        $this->model = new Curso($conn);
        $this->areaModel = new AreaCurso($conn);
    }

    public function index()
    {
        $cursos = $this->model->getAll();
        include '../app/views/cursos/index.php';
    }

    public function create()
    {
        $areas = $this->areaModel->getAll();
        include '../app/views/cursos/create.php';
    }

    public function store()
    {
        $titulo = $_POST['titulo'] ?? '';
        $descricao = $_POST['descricao'] ?? '';
        $area_id = $_POST['area_id'] ?? null;

        if (empty($titulo) || empty($area_id)) {
            echo "Título e área são obrigatórios!";
            return;
        }

        $this->model->create($titulo, $descricao, $area_id);
        header('Location: /cursos');
    }

    public function edit($id)
    {
        $curso = $this->model->getById($id);
        $areas = $this->areaModel->getAll();
        include '../app/views/cursos/edit.php';
    }

    public function update($id)
    {
        $titulo = $_POST['titulo'] ?? '';
        $descricao = $_POST['descricao'] ?? '';
        $area_id = $_POST['area_id'] ?? null;

        $this->model->update($id, $titulo, $descricao, $area_id);
        header('Location: /cursos');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /cursos');
    }
}