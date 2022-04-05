<?php

class Sparepart_model{
    private $dbh; // database handler
    private $stmt; // statement untuk simpan Query

    public function __construct()
    {
        //  dsn = data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO ($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    // [
    //     [
    //         "kode" => "123",
    //         "description" => "Obeng",
    //         "longtext" => "Obeng ketok",
    //         "qty" => "2"
    //     ],
    //     [
    //         "kode" => "456",
    //         "description" => "Tang",
    //         "longtext" => "Tang Potong",
    //         "qty" => "5"
    //     ]
    // ];

    public function getAllSparepart()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM sparepart");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}