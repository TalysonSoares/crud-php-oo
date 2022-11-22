<?php

    include '../src/Controller/AlunoController.php';


function criarRota(string $controllerNome, string $methodNome): array
{
    return [
        'controller' => $controllerNome,
        'method' => $methodNome,
    ];
}

$rotas = [
    '/' => 'Pagina inicial',
    '/alunos/listar' => 'Listando alunos',
    'alunos/novo' => 'Cadastrando alunos',
    'alunos/excluir' => 'Excluindo alunos',
];


return $rotas;