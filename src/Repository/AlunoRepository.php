<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Model\Aluno;
use PDO;

class AlunoRepository implements RepositoryInterface
{
    public const TABLE = 'tb_alunos';

    public function buscarTodos(): iterable
    {
        $conexao = DatabaseConnection::abrirConexao();

        $sql = 'SELECT * FROM ' . self::TABLE;

        //preparando para executar no banco
        $query = $conexao->query($sql);

        //executando o comando lá no banco de dados
        $query->execute(); 

        return $query->fetchAll(PDO::FETCH_CLASS, Aluno::class); //pegando os dados e tranformando em array
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