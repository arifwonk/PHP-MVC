<?php

class Sparepart_model
{
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

    public function tambahDataSparepart($data)

    {
        $query = "INSERT INTO sparepart
                        VALUES
                    ('', :kode, :deskrip, :detail, :qty, :mrp)";

        $this->db->query($query);
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('deskrip', $data['deskrip']);
        $this->db->bind('detail', $data['detail']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('mrp', $data['mrp']);

        $this->db->execute();
        return $this->db->hitungBaris();
    }

    public function hapusDataSparepart($id)
    {
        $query = "DELETE FROM sparepart WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->hitungBaris();
    }

    public function ubahDataSparepart($data)

    {
        $query = "UPDATE sparepart SET
                    kode = :kode,
                    deskrip = :deskrip,
                    detail = :detail,
                    qty = :qty,
                    mrp = :mrp
                 WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kode', $data['kode']);
        $this->db->bind('deskrip', $data['deskrip']);
        $this->db->bind('detail', $data['detail']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('mrp', $data['mrp']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->hitungBaris();
    }

    public function cariDataSparepart()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM sparepart WHERE 
        kode LIKE :keyword OR
        deskrip LIKE :keyword OR
        detail LIKE :keyword OR
        mrp LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
