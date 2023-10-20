<?php
class Penjualan {
    private $IDPenjualan;
    private $JumlahPenjualan;
    private $HargaJual;
    private $IDPengguna;
    private $IDBarang;

    public function __construct($IDPenjualan, $JumlahPenjualan, $HargaJual, $IDPengguna, $IDBarang) {
        $this->IDPenjualan = $IDPenjualan;
        $this->JumlahPenjualan = $JumlahPenjualan;
        $this->HargaJual = $HargaJual;
        $this->IDPengguna = $IDPengguna;
        $this->IDBarang = $IDBarang;
    }

    public function getIDPenjualan() {
        return $this->IDPenjualan;
    }

    public function getJumlahPenjualan() {
        return $this->JumlahPenjualan;
    }
}
?>
