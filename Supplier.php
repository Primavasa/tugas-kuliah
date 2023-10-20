<?php
class Supplier {
    private $idSupplier;
    private $NamaSupplier;
    private $idBarang;
    private $NoTelp;
    private $Alamat;
    private $IdPembelian;

    public function __construct($idSupplier, $NamaSupplier, $idBarang, $NoTelp, $Alamat, $IdPembelian) {
        $this->idSupplier = $idSupplier;
        $this->NamaSupplier = $NamaSupplier;
        $this->idBarang = $idBarang;
        $this->NoTelp = $NoTelp;
        $this->Alamat = $Alamat;
        $this->IdPembelian = $IdPembelian;
    }

    public function getIdSupplier() {
        return $this->idSupplier;
    }

    public function getNamaSupplier() {
        return $this->NamaSupplier;
    }
}
?>
