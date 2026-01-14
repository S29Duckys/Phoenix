<?php

namespace PHOENIX\Models;

use PHOENIX\Models\User;

/** Class UserManager **/
class UserManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function find(String $username): User | false
    {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_accounts WHERE username = ?");
        $stmt->execute(array(
            $username
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS,"PHOENIX\Models\User");

        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->bdd->query('SELECT * FROM tp_accounts');

        return $stmt->fetchAll(\PDO::FETCH_CLASS, "PHOENIX\Models\User");
    }

    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO tp_accounts(id_account, username, password, admin) VALUES (?, ?, ?, ?)");
        $stmt->execute(array(
            uniqid(),
            $_POST["username"],
            $password,
            0
        ));
    }

    public function getAllUsers()
    {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_accounts ORDER BY id_account ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM tp_accounts WHERE id_account = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function updateAdminStatus($userId, $status)
    {
        $stmt = $this->bdd->prepare("UPDATE tp_accounts SET admin = ? WHERE id_account = ?");
        return $stmt->execute([$status, $userId]);
    }
}
