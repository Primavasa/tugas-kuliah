<?php
class Pelanggan {
    private $idPelanggan;
    private $NamaPelanggan;
    private $idBarang;
    private $Qty;
    private $TglPemesanan;
    private $IdPenjualan;

    public function __construct($idPelanggan, $NamaPelanggan, $idBarang, $Qty, $TglPemesanan, $IdPenjualan) {
        $this->idPelanggan = $idPelanggan;
        $this->NamaPelanggan = $NamaPelanggan;
        $this->idBarang = $idBarang;
        $this->Qty = $Qty;
        $this->TglPemesanan = $TglPemesanan;
        $this->IdPenjualan = $IdPenjualan;
    }

    public function getIdPelanggan() {
        return $this->idPelanggan;
    }

    public function getNamaPelanggan() {
        return $this->NamaPelanggan;
    }
}
?>
