<?php
class employee{
    private $nama;
    private $jabatan;
    private $usia;
    private $office_id;

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    public function getUsia() {
        return $this->usia;
    }

    public function setUsia($usia) {
        $this->usia = $usia;
    }

    public function getOfficeId() {
        return $this->office_id;
    }

    public function setOfficeId($office_id) {
        $this->office_id = $office_id;
    }
}
?>