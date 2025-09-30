<?php

use App\Controller\CursoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        CursoController::index();
    break;
    case '/cursos':
        CursoController::listar();
    break;
    case '/cursos/cadastrar':
        CursoController::cadastrar();
    break;
}