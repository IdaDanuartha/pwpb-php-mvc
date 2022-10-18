<?php

class PostModel {
    private $table = 'posts',
            $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function store($data)
    {
        $this->db->query("INSERT INTO {$this->table} (first_name, last_name, username, email, password) VALUES (:first_name, :last_name, :username, :email, :password)");

        $this->db->bind('first_name', $data['first_name']);
        $this->db->bind('last_name', $data['last_name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}