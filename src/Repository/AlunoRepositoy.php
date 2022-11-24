<?php

declare(strict_types=1);

namespace App\Repository;

class AlunoRepository
{
    public function buscarTodos(): iterable
    {
        return [];
    }

    public function buscarUm(string $id): object
    {
        return new \stdClass();
    }

    public function inserir(object $dados): object
    {
        return $dados;
    }

    public function atualizar(object $novosDados, string $id): object
    {
        return $novosDados;
    }

    public function excluir(string $id): void
    {
         
    }
}