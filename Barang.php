<?php
class Barang {
    private $IDBarang;
    private $NamaBarang;
    private $Keterangan;
    private $Satuan;
    private $IDPengguna;

    public function __construct($IDBarang, $NamaBarang, $Keterangan, $Satuan, $IDPengguna) {
        $this->IDBarang = $IDBarang;
        $this->NamaBarang = $NamaBarang;
        $this->Keterangan = $Keterangan;
        $this->Satuan = $Satuan;
        $this->IDPengguna = $IDPengguna;
    }

    public function getIDBarang() {
        return $this->IDBarang;
    }

    public function getNamaBarang() {
        return $this->NamaBarang;
    }
}
?>