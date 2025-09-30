<?php

namespace App\DAO;

use App\Model\Curso;

final class CursoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(Curso $model) : Curso
    {
        return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }

    public function insert(Curso $model) : Curso
    {
        $sql = "INSERT INTO curso(nome, especialidade) VALUES (?, ?)";
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->especialidade);
        $stmt->execute();
        
        $model->id = parent::$conexao->lastInsertId();

        return $model;
    }

    public function update(Curso $model) : Curso
    {
        $sql = "UPDATE curso SET nome=? , especialidade=? WHERE id=? ";

        $stmt = parent::$conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->especialidade);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();

        return $model;
    }

    public function selectById(int $id) : ?Curso
    {
        $sql = "SELECT * FROM curso WHERE id=? ";

        $stmt = parent::$conexao->prepare($sql);

        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\Curso");
    }

    public function select() : array
    {
        $sql = "SELECT * FROM curso";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Curso");
    }

    public function delete(int $id) : bool
    {
        $sql = "DELETE FROM curso WHERE id=? ";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
    }
}