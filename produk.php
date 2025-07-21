<?php

// jual produk
// komik
// game

// class
class Produk {
    // property

    public 
        $judul = "judul", 
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // method

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// object

$produk3 = new Produk();
$produk3 -> judul = "naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "jump";
$produk3 -> harga = 1200;

$produk4 = new Produk();
$produk4 -> judul = "Unchareted";
$produk4 -> penulis = "neil Drukman";
$produk4 -> penerbit = "sonny Computer";
$produk4 -> harga = 240000;

echo "komik :" .$produk3->getLabel();
echo "<br>";
echo "game : " .$produk4 ->getLabel();
