<?php

class UserModel {
    private $table = 'users',
            $db,
            $name = 'Danu';
    public function getUser() {
        return $this->name;
    }
    public function __construct() {
        $this->db = new Database();
    }
    public function getAllUser() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }
    public function getUserByID($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function createUser($data)
    {
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO {$this->table} (first_name, last_name, username, email, password) VALUES (:first_name, :last_name, :username, :email, :password)");

        $this->db->bind('first_name', $data['first_name']);
        $this->db->bind('last_name', $data['last_name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $hash);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function findUserByEmail($email)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind('email', $email);
        $row = $this->db->resultSingle();

        if($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function login($data)
    {
        $userEmail = $data['email'];
        $row = $this->findUserByEmail($userEmail);
        if($row == false) return false;

        $hashedPass = $row['password'];

        if(password_verify($data['password'], $hashedPass)) {
            return $row;
        } else {
            return false;
        }
    }

    public function session($user)
    {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['isLogged'] = true;

        header('Location: ' . BASE_URL);
    }
}