<?php

namespace App\Controller;

class CursoController
{
    public static function index()
    {
        echo "Página incial do curso";
    }

    public static function cadastrar() : void
    {
        echo "Página de cadastro do curso";
    }

    public static function listar() : void
    {
        echo "Página de listagem do curso";
    }
}