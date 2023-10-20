<?php
class HakAkses {
    private $IDAkses;
    private $NamaAkses;
    private $Keterangan;

    public function __construct($IDAkses, $NamaAkses, $Keterangan) {
        $this->IDAkses = $IDAkses;
        $this->NamaAkses = $NamaAkses;
        $this->Keterangan = $Keterangan;
    }

    public function getIDAkses() {
        return $this->IDAkses;
    }

    public function getNamaAkses() {
        return $this->NamaAkses;
    }

    public function getKeterangan() {
        return $this->Keterangan;
    }

    public function setNamaAkses($NamaAkses) {
        $this->NamaAkses = $NamaAkses;
    }

    public function setKeterangan($Keterangan) {
        $this->Keterangan = $Keterangan;
    }
}
?>