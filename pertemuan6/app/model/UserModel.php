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
}