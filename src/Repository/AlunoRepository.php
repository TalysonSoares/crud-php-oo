<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;

class AlunoRepository implements RepositoryInterface
{
    public function buscarTodos(): iterable
    {   
        $conexao = DatabaseConnection::abrirConexao();
        
        $sql = 'SELECT * FROM tb_alunos';

        //preparando para executar no banco
        $query = $conexao->query($sql);

        //executando o comando lá no banco de dados 
        $query->execute();

        return $query->fetchAll(); //pegando os dados e transformando em um array
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