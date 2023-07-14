<?php

class Model
{
    protected $db;
    protected $query;
    
    public function __construct()
    {
        $this->db = new PDO("mysql:host=database;dbname=leanrmysql", 'root', '123@123a');
        $this->db->exec("set names utf8mb4");
    }

    public function query($sql)
    {
        $this->query = $this->db->query($sql);
    }

    public function getAll()
    {
        $data = [];

        while($row = $this->query->fetchObject()) {
            $data[] = $row;
        }

        return $data;
    }

    public function get()
    {
        return $this->query->fetchObject();
    }
}