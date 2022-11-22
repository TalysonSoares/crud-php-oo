<?php   

declare(strict_types=1);

use DateTime; // importando a classe interna do PHP DateTime;   

//aqui vai fiacar a definição do caminho até essa classe

class Aluno
{
    public string $nome;
    public string $cpf;
    public int $matricula;
    public DateTime $dataNascimento;
    public bool $status;
    public string $genero; //enum 
}