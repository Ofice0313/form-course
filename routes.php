<?php

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "Página Inícial do Curso";
    break;
    case '/cursos':
        echo "Listagem de cursos";
    break;
    case '/cursos/cadastrar':
        echo "Página de cadastro de curso";
    break;
}