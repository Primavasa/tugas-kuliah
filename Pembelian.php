<?php
class Pembelian {
    private $IDPembelian;
    private $JumlahPembelian;
    private $HargaBeli;
    private $IDPengguna;
    private $IDBarang;

    public function __construct($IDPembelian, $JumlahPembelian, $HargaBeli, $IDPengguna, $IDBarang) {
        $this->IDPembelian = $IDPembelian;
        $this->JumlahPembelian = $JumlahPembelian;
        $this->HargaBeli = $HargaBeli;
        $this->IDPengguna = $IDPengguna;
        $this->IDBarang = $IDBarang;
    }

    public function getIDPembelian() {
        return $this->IDPembelian;
    }

    public function getJumlahPembelian() {
        return $this->JumlahPembelian;
    }
}
?>