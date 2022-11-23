<?php

declare(strict_types=1);

class AlunoController
{
    public function listar(): void
    {
        $this->renderizar('listar');
    }

    public function cadastrar(): void
    {
        $this->renderizar('cadastrar');
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