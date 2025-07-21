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
        $durasi;

    // constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $durasi= 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->durasi = $durasi;
    }

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function GetInfoProduk() {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// inheritance / pewarisan 
// masih ada kekukarangan yaitu masih tidak dapat memanggil function dengan nama yang sama.
// child class
class Komik extends Produk {
    public function GetInfoProduk(){
         $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
            return $str;

    }
}

class Game extends Produk {
    public function GetInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->durasi} Jam";
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
$produk1 = new Komik("Naruto", "Masashi moto", "jump", 12000, 100, 0);
$produk2 = new Game("Unchareted", "Neil Drukman", "sonny Computer", 240000, 0, 50);

echo $produk1->GetInfoProduk();
echo "<br>";
echo $produk2->GetInfoProduk();