<!-- mengapa visibility penting karena ada beberapa data yang tidak boleh di akses oleh public, maka dari itu visibilty itu penting agar data tetap terjaga dan aman.

//protected hanya dapat di akses oleh class itu sendiri dan class turunannya (parend).
 
-->

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
        $penerbit;

    protected $diskon = 0;

    private $harga; 
    
    // constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function GetInfoProduk() {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// inheritance / pewarisan
// untuk mengatasinya kita menggunakan overriding
// child class
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman= 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function GetInfoProduk(){
         $str = "Komik : ". parent::GetInfoProduk() ."- {$this->jmlHalaman} Halaman."; // ini sudah menggunakn overriding

        return $str;
    }
}

class Game extends Produk {
    public $durasi;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi= 0){
        parent :: __construct($judul, $penulis, $penerbit, $harga);

        $this->durasi = $durasi;
    }

    public function GetInfoProduk()
    {
        $str = "Game : ". parent::GetInfoProduk() ." ~ {$this->durasi} Jam. ";

        return $str;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
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
$produk1 = new Komik("Naruto", "Masashi moto", "jump", 12000, 100);
$produk2 = new Game("Unchareted", "Neil Drukman", "sonny Computer", 240000,50);

echo $produk1->GetInfoProduk();
echo "<br>";
echo $produk2->GetInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();