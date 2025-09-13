<?php
class office{
    private $id;
    private $nama;
    private $alamat;
    private $kota;
    private $telepon;
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function getKota() {
        return $this->kota;
    }

    public function setKota($kota) {
        $this->kota = $kota;
    }

    public function getTelepon() {
        return $this->telepon;
    }

    public function setTelepon($telepon) {
        $this->telepon = $telepon;
    }
}
?>