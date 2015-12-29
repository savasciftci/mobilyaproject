<?php

class Panel_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $sql = "SELECT * FROM table";
        return $this->db->select($sql);
    }

    public function insert($data) {
        return ($this->db->insert("table", $data));
    }

    public function update($data, $gelenid) {
        return ($this->db->update("table", $data, "table_id=$gelenid"));
    }

    public function delete($gelenid) {
        return ($this->db->delete("table", "table_id=$gelenid"));
    }

    //login select formu
    public function loginselect($email, $sifre) {
        $sql = "SELECT fwkullaniciID,fwkullaniciAd,fwkullaniciEmail FROM fwkullanicilar WHERE fwkullaniciEmail='$email' AND fwkullaniciSifre='$sifre'";
        return $this->db->select($sql);
    }

    //login select formu
    public function profilselect($id) {
        $sql = "SELECT fwkullaniciAd,fwkullaniciAdres,fwkullaniciSehir,fwkullaniciCinsiyet,fwkullaniciEmail FROM fwkullanicilar WHERE fwkullaniciID=$id";
        return $this->db->select($sql);
    }

    //kategori select formu
    public function kategoriselect() {
        $sql = "SELECT ID,ad,icerik FROM kategori";
        return $this->db->select($sql);
    }

    public function profilupdate($data, $gelenid) {
        return ($this->db->update("fwkullanicilar", $data, "fwkullaniciID=$gelenid"));
    }

    public function profildelete($gelenid) {
        return ($this->db->delete("fwkullanicilar", "fwkullaniciID=$gelenid"));
    }

    public function logininsert($data) {
        return ($this->db->insert("fwkullanicilar", $data));
    }

    public function kategoriinsert($data) {
        return ($this->db->insert("kategori", $data));
    }
    public function uruninsert($dataurun) {
        return ($this->db->insert("urunler", $dataurun));
    }

    //kategori select formu
    public function urunselect() {
        $sql = "SELECT urun_id,urun_resim,urun_aciklama,urun_fiyat,urun_kategori,urun_tarih FROM urunler";
        return $this->db->select($sql);
    }

    public function kategoriupdate($dataKategori, $gelenid) {
        return ($this->db->update("kategori", $dataKategori, "ID=$gelenid"));
    }

    public function urunupdate($dataUrun, $gelenid) {
        return ($this->db->update("urunler", $dataUrun, "urun_id=$gelenid"));
    }
    public function urundelete($gelenid) {
        return ($this->db->delete("urunler", "urun_id=$gelenid"));
    }
    public function kategoridelete($gelenid) {
        return ($this->db->delete("kategori", "ID=$gelenid"));
    }

}

?>
