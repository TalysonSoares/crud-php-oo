<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\AlunoRepository;

class AlunoController extends AbstractController
{
    public function listar(): void
    {   
        $rep = new AlunoRepository();

        $alunos = $rep->buscarTodos();
        

        $this->render('aluno/listar');
    }

    public function cadastrar(): void
    {
        $this->render('aluno/cadastrar');
    }

    public function excluir(): void
    {
        $this->render('aluno/excluir');
    }

    public function editar(): void
    {
        $this->render('aluno/editar');
    }
}