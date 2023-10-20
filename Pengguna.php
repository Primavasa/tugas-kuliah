<?php
class Pengguna {
    private $IDPengguna;
    private $NamaPengguna;
    private $Password;
    private $NamaDepan;
    private $NamaBelakang;
    private $NoHp;
    private $Alamat;
    private $IDAkses;

    public function __construct($IDPengguna, $NamaPengguna, $Password, $NamaDepan, $NamaBelakang, $NoHp, $Alamat, $IDAkses) {
        $this->IDPengguna = $IDPengguna;
        $this->NamaPengguna = $NamaPengguna;
        $this->Password = $Password;
        $this->NamaDepan = $NamaDepan;
        $this->NamaBelakang = $NamaBelakang;
        $this->NoHp = $NoHp;
        $this->Alamat = $Alamat;
        $this->IDAkses = $IDAkses;
    }

    public function getIDPengguna() {
        return $this->IDPengguna;
    }

    public function getNamaPengguna() {
        return $this->NamaPengguna;
    }
}
?>