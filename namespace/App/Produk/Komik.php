<?php

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman= 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function GetInfoProduk(){
         $str = "Komik : ". $this->getInfo() ."- {$this->jmlHalaman} Halaman."; // ini sudah menggunakn overriding

        return $str;
    }
}