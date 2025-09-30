<?php

namespace App\Controller;

use App\Model\Curso;

class CursoController
{
    public static function index()
    {
        echo "Página incial do curso";
    }

    public static function cadastrar() : void
    {
        echo "Página de cadastro do curso";
        $model = new Curso();
        $model->nome = "TIC's";
        $model->especialidade = "Programação Informática";
        $model->save();
        echo "</br >";
        echo "Curso inserido com sucesso!";
    }

    public static function listar() : void
    {
        echo "Página de listagem do curso";
        $cursos = new Curso();
        $lista = $cursos->getAll();
        var_dump($lista);
    }
}