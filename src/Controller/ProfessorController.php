<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\ProfessorRepository;

class ProfessorController extends AbstractController
{
    public function listar(): void
    {
        $rep = new ProfessorRepository();

        $professores = $rep->buscarTodos();

        $this->render('/professor/listar', [
            'professores' => $professores,
        ]);
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
}