<?php

namespace App\Model;

class Curso
{
    public $id, $nome,$especialidade;

    public function save() : Curso
    {
        return new Curso;
    }

    public function getById(int $id) : ?Curso
    {
        return new Curso();
    }

    public function getAll() : array
    {
        return [];
    }

    public function delete($id) : bool
    {
        return false;
    }
}