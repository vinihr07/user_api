<?php

namespace App\DAO;

use App\Models\User as User;

class UserDAO extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsers()
    {
        $users = $this->pdo->query('SELECT * FROM usuario')
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }

    public function getUserById($id)
    {
        $sth = $this->pdo->prepare('SELECT * FROM usuario WHERE id = :id');

        $sth->bindValue(':id',$id,\PDO::PARAM_INT);

        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}