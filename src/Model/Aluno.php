<?php

declare(strict_types=1);

namespace App\Model;

use DateTime; //importando a classe interna do PHP DateTime

//aqui vai ficar a definição do caminho até essa classe

class Aluno extends Pessoa
{
    public int $matricula;
    public DateTime $dataNascimento;
    public bool $status;
    public string $genero; //enum
}