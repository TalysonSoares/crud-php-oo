<?php

declare(stricty_types=1);

namespace App\Model;

class Curso
{
    public string $nome;
    public int $cargaHoraria;
    public string $descricao;
    public bool $status;
    public array $ementa;
}