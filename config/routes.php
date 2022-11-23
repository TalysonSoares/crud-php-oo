<?php

require_once '../src/Controller/ProfessorController.php';
require_once '../src/Controller/AlunoController.php';
require_once '../src/Controller/CursoController.php';
require_once '../src/Controller/SiteController.php';

function criarRota(string $controllerNome, string $methodNome): array
{
    return [
        'controller' => $controllerNome,
        'method' => $methodNome,
    ];
}

$rotas = [
    '/' => 'Pagina inicial',
    '/alunos/listar' => criarRota(AlunoController::class, 'listar'),
    '/alunos/novo' => criarRota(AlunoController::class, 'cadastrar'),
    '/alunos/editar' => criarRota(AlunoController::class, 'editar'),
    '/alunos/excluir' => criarRota(AlunoController::class, 'excluir'),
    '/professor/listar' => criarRota(Professor::class, 'listar'),
    '/professor/novo' => criarRota(Professor::class, 'cadastrar'),
    '/professor/editar' => criarRota(Professor::class, 'editar'),
    '/professor/excluir' => criarRota(Professor::class, 'excluir'),
    '/curso/listar' => criarRota(CursoController::class, 'listar'),
    '/curso/novo' => criarRota(CursoController::class, 'cadastrar'),
    '/curso/editar' => criarRota(CursoController::class, 'editar'),
    '/curso/excluir' => criarRota(CursooController::class, 'excluir'),
];


return $rotas;