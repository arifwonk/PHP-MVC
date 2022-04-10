<?php

class Sparepart_model{
    private $table = 'sparepart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
   
    
    public function getAllSparepart()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSparepartById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
}