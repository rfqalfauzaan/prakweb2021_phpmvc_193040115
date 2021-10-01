<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Rifqi Al Fauzaan",
    //         "nrp" => "193040115",
    //         "email" => "alfauzaan.rifqi@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "icuy",
    //         "nrp" => "193050111",
    //         "email" => "icuy@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "asep",
    //         "nrp" => "193010001",
    //         "email" => "asep@yahoo.com",
    //         "jurusan" => "Teknik Mesin"
    //     ]

    // ];

    private $dbh;
    private $stmt;

    public function __construct() {
        
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040122';
        try{
                    $this->dbh = new PDO($dsn, 'root', '');
                }catch(PDOException $e){
                    die($e->getMessage());
                }

    }

    public function getAllMahasiswa() {
        $this->mhs;
    }
}