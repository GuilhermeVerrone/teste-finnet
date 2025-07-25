<?php


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/auth.php';
$conn = require __DIR__ . '/../config/database.php';

require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/AlunoController.php';
require_once __DIR__ . '/../app/controllers/CursoController.php';
require_once __DIR__ . '/../app/controllers/AreaCursoController.php';
require_once __DIR__ . '/../app/controllers/MatriculaController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$auth = new AuthController($conn);
$aluno = new AlunoController($conn);
$curso = new CursoController($conn);
$area = new AreaCursoController($conn);
$matricula = new MatriculaController($conn);

// 🔓 Login público
if ($uri === '/login' && $method === 'GET') {
    $auth->loginForm();
    return;
} elseif ($uri === '/login' && $method === 'POST') {
    $auth->login();
    return;
} elseif ($uri === '/logout') {
    $auth->logout();
    return;
}


requireLogin();

if (!preg_match('#/store|/update|/delete#', $uri)) {
    echo '
    <nav class="mt-3 mb-4 text-center">
        <div class="d-inline-block">
            <a href="/areas" class="btn btn-outline-primary btn-sm me-2">Áreas</a>
            <a href="/cursos" class="btn btn-outline-primary btn-sm me-2">Cursos</a>
            <a href="/alunos" class="btn btn-outline-primary btn-sm me-2">Alunos</a>
            <a href="/matriculas" class="btn btn-outline-primary btn-sm me-2">Matrículas</a>
            <a href="/logout" class="btn btn-outline-danger btn-sm">Sair</a>
        </div>
    </nav>';
}

// 🔄 Roteamento
if ($uri === '/' || $uri === '/areas')             $area->index();
elseif ($uri === '/areas/create')                  $area->create();
elseif ($uri === '/areas/store' && $method === 'POST')   $area->store();
elseif (preg_match('#^/areas/edit/(\d+)$#', $uri, $m))   $area->edit($m[1]);
elseif (preg_match('#^/areas/update/(\d+)$#', $uri, $m)) $area->update($m[1]);
elseif (preg_match('#^/areas/delete/(\d+)$#', $uri, $m)) $area->delete($m[1]);

elseif ($uri === '/cursos')                        $curso->index();
elseif ($uri === '/cursos/create')                 $curso->create();
elseif ($uri === '/cursos/store' && $method === 'POST') $curso->store();
elseif (preg_match('#^/cursos/edit/(\d+)$#', $uri, $m))  $curso->edit($m[1]);
elseif (preg_match('#^/cursos/update/(\d+)$#', $uri, $m))$curso->update($m[1]);
elseif (preg_match('#^/cursos/delete/(\d+)$#', $uri, $m))$curso->delete($m[1]);

elseif ($uri === '/alunos')                        $aluno->index();
elseif ($uri === '/alunos/create')                 $aluno->create();
elseif ($uri === '/alunos/store' && $method === 'POST') $aluno->store();
elseif (preg_match('#^/alunos/edit/(\d+)$#', $uri, $m))  $aluno->edit($m[1]);
elseif (preg_match('#^/alunos/update/(\d+)$#', $uri, $m))$aluno->update($m[1]);
elseif (preg_match('#^/alunos/delete/(\d+)$#', $uri, $m))$aluno->delete($m[1]);

elseif ($uri === '/matriculas')                    $matricula->index();
elseif ($uri === '/matriculas/create')             $matricula->create();
elseif ($uri === '/matriculas/store' && $method === 'POST') $matricula->store();
elseif (preg_match('#^/matriculas/delete/(\d+)$#', $uri, $m)) $matricula->delete($m[1]);

else echo "404 - Página não encontrada";

?>]