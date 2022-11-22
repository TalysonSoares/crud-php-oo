<?php

require_once '../src/Controller/AlunoController.php';

$rotas = require '../config/routes.php';

explode('?', '/excluir?id=10');

$url = $_SERVER['REQUEST_URI']; //pegando a url acessada pelo usuario
$rota =  explode('?', $url)[0]; //separando a url, atraves do "?"