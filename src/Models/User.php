<?php

namespace PHOENIX\Models;

/** Class User **/
class User {

    private ?string $id_account = null;
    private ?string $username = null;
    private ?string $password = null;
    private ?int $admin = null;

    private ?string $email = null;
    private ?string $name = null;
    private ?string $adress = null;
    private ?string $tel = null;
    private ?string $num_carte = null;
    private ?string $crypto = null;
    private ?bool $conditions = null;

    public function getIdAccount() {
        return $this->id_account;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdmin() {
        return $this->admin;
    }

    public function setUsername(String $username) {
        $this->username = $username;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function setIdAccount($id_account) {
        $this->id_account = $id_account;

    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}
