<?php

// jual produk
// komik
// game

// kalo ingin menampilkan sebauh function yang ada pada class maka gunakan return 

// class
class Produk {
    // property
    public 
        $judul, 
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $durasi,
        $tipe;

    // constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $durasi= 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->durasi = $durasi;
        $this->tipe = $tipe;
    }

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function GetInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "komik" ){
            $str .= "- {$this->jmlHalaman} Halaman";
        } else if ($this->tipe == "Game"){
            $str.= "- {$this->durasi} Durasi";
        }

        return $str;
    }
}

// object-type
class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}


// object
$produk1 = new Produk("Naruto", "Masashi moto", "jump", 12000, 100, 0, "Komik");
$produk2 = new Produk("Unchareted", "Neil Drukman", "sonny Computer", 240000, 0, 50, "game");

echo $produk1->GetInfoLengkap();