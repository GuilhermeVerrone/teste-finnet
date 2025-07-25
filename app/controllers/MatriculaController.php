<?php

require_once '../app/models/Matricula.php';
require_once '../app/models/Aluno.php';
require_once '../app/models/Curso.php';

class MatriculaController
{
    private $model, $alunoModel, $cursoModel;

    public function __construct($conn)
    {
        $this->model = new Matricula($conn);
        $this->alunoModel = new Aluno($conn);
        $this->cursoModel = new Curso($conn);
    }

    public function index()
    {
        $matriculas = $this->model->getAll();
        include '../app/views/matriculas/index.php';
    }

    public function create()
    {
        $alunos = $this->alunoModel->getAll();
        $cursos = $this->cursoModel->getAll();
        include '../app/views/matriculas/create.php';
    }

    public function store()
    {
        $aluno_id = $_POST['aluno_id'] ?? null;
        $cursos = $_POST['curso_ids'] ?? [];

        if (!$aluno_id || empty($cursos)) {
            echo "Selecione o aluno e pelo menos um curso.";
            return;
        }

        $this->model->create($aluno_id, $cursos);
        header('Location: /matriculas');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /matriculas');
    }
}
