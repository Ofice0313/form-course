<?php

namespace App\Model;

use App\DAO\CursoDAO;

class Curso
{
    public $id, $nome,$especialidade;

    public function save() : Curso
    {
        return (new CursoDAO())->save($this);
    }

    public function getById(int $id) : ?Curso
    {
        return (new CursoDAO())->selectById($id);
    }

    public function getAll() : array
    {
        return (new CursoDAO())->select();
    }

    public function delete($id) : bool
    {
        return (new CursoDAO())->delete($id);
    }
}