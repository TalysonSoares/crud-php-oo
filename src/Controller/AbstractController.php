<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $view, ?array $dados = null): void
    {
        if(isset($dados)){
            extract($dados);
        }

        include_once '../views/template/header.phtml';

        include_once '../views/template/menu.phtml';

        include_once "../views/{$view}.phtml";

        include_once '../views/template/footer.phtml';
    }

    public function redirect(string $local):void
    {
        header('location: '. $local);
    }
}