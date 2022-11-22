<?php

declare(strict_types=1);

class AlunoController
{
    public function listar(): void
    {
        include '../views/aluno/listar.phtml';
    }

    public function cadastrar(): void
    {
        echo "Pagina de cadastrar";
    }

    public function excluir(): void
    {
        echo "Pagina de excluir";
    }

    public function editar(): void
    {
        echo "Pagina de editar";
    }
    
    public function renderizar(string $arquivo, ?array $dados = null)
    {
        include "../Views/aluno/{$arquivo}.phtml";
        $dados;
    }
}