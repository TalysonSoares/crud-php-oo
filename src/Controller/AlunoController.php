<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Aluno;
use App\Repository\AlunoRepository;
use Dompdf\Dompdf;
use Exception;

class AlunoController extends AbstractController
{
    public function listar(): void
    {
        $rep = new AlunoRepository();

        $alunos = $rep->buscarTodos();

        $this->render('aluno/listar', [
            'alunos' => $alunos,
        ]);
    }

    public function cadastrar(): void
    {
        if (true === empty($_POST)) {
            $this->render('aluno/cadastrar');
            return;
        }
        
        $aluno = new Aluno();
        $aluno->nome = $_POST['nome'];
        $aluno->dataNascimento = $_POST['nascimento'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->email = $_POST['email'];
        $aluno->genero = $_POST['genero'];

        $rep = new AlunoRepository();

        try {
            $rep->inserir($aluno);
        } catch (Exception $exception) {
            if (true === str_contains($exception->getMessage(), 'cpf')) {
                die('CPF ja existe');
            }

            if (true === str_contains($exception->getMessage(), 'email')) {
                die('Email ja existe');
            }

            die('Vish, aconteceu um erro');
        }

        $rep->inserir($aluno);

        $this->redirect('/alunos/listar');
    }

    public function excluir(): void
    {
        $this->render('aluno/excluir');
        $id = $_GET['id'];
        $rep = new AlunoRepository();
        $rep->excluir($id);
        $this->redirect('aluno/listar');
    }

    public function editar(): void
    {
        $this->render('aluno/editar');
    }

    public function relatorio(): void
    {
        $hoje = date('d/m/Y');

        $design = "
            <h1>Relatorio de alunos</h1>
            <hr>
            <em>Gerado em {$hoje}</em>
        ";

        $dompdf = New Dompdf();
        $dompdf->setPaper('A4', 'portrait'); // tamanho da página

        $dompdf->loadHtml($design); //carrega o conteudo do PDF

        $dompdf->render(); //aqui renderiza
        $dompdf->stream(); //é aqui que a magica acontece

    }
}