<?php

require_once '../src/Controller/ProfessorController.php';
require_once '../src/Controller/AlunoController.php';
require_once '../src/Controller/CursoController.php';

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
    '/professor/listar' => criarRota(AlunoController::class, 'listar'),
    '/professor/novo' => criarRota(AlunoController::class, 'cadastrar'),
    '/professor/editar' => criarRota(AlunoController::class, 'editar'),
    '/professor/excluir' => criarRota(AlunoController::class, 'excluir'),
    '/curso/listar' => criarRota(AlunoController::class, 'listar'),
    '/curso/novo' => criarRota(AlunoController::class, 'cadastrar'),
    '/curso/editar' => criarRota(AlunoController::class, 'editar'),
    '/curso/excluir' => criarRota(AlunoController::class, 'excluir'),
];


return $rotas;