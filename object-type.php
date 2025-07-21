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
        $harga;

    // constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
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
$produk1 = new Produk("Naruto", "Masashi moto", "jump", 12000);
$produk2 = new Produk("Unchareted", "Neil Drukman", "sonny Computer", 240000);

// echo "komik :" .$produk1->getLabel();
// echo "<br>";
// echo "Game : " .$produk2 ->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);