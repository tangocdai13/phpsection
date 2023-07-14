<?php

class Model
{
    protected $db;
    protected $query;

    protected $table;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=database;dbname=leanrmysql", 'root', '123@123a');
        $this->db->exec("set names utf8mb4");
    }

    protected function setTable($value)
    {
        $this->table = $value;
    }

    protected function getTable()
    {
        return $this->table;
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

    public function create(array $inputs)
    {
        $columnNames = array_keys($inputs);
        $columnNameString = implode(',', $columnNames);

        $values = array_values($inputs);
        foreach ($values as $key => $item) {
            $values[$key] = !empty($item) ?  '"' . htmlentities($item) . '"' : '"' . $item . '"';
        }

        $valueString = implode(',', $values);


        $sql = "INSERT INTO {$this->getTable()}(${columnNameString}) VALUES(${valueString})";

        $this->query($sql);
    }

    public function update(array $inputs, $condition = null)
    {
        $setValues = [];

        foreach ($inputs as $key => $value) {
            $setValues[] = "$key='". htmlentities($value) . "'";
        }

        $setValueString = implode(',', $setValues);
        
        $sql = "UPDATE {$this->getTable()} SET {$setValueString} WHERE id = ${condition}";

        $this->query($sql);
    }
}