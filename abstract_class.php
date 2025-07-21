<!-- mengapa visibility penting karena ada beberapa data yang tidak boleh di akses oleh public, maka dari itu visibilty itu penting agar data tetap terjaga dan aman.

//protected hanya dapat di akses oleh class itu sendiri dan class turunannya (parend).
 
-->

<?php

// jual produk
// komik
// game

// kalo ingin menampilkan sebauh function yang ada pada class maka gunakan return 

// class
abstract class Produk {
    // property
    private 
        $judul, 
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;
    
    // constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function setJudul( $judul ){
        $this->judul = $judul;
    }

    public function getJudul(){ 
        return $this->judul;
    }

    public function setPenulis($penulis ){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
       return  $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function GetInfoProduk(); 
    
    public function getInfo() {
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
         $str = "Komik : ". $this->getInfo() ."- {$this->jmlHalaman} Halaman."; // ini sudah menggunakn overriding

        return $str;
    }
}

class Game extends Produk {
    public $durasi;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi= 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->durasi = $durasi;
    }

    public function GetInfoProduk()
    {
        $str = "Game : ". $this->getInfo() ." ~ {$this->durasi} Jam. ";

        return $str;
    }

}

// object-type
class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk) {
        $this->daftarProduk[]= $produk;
    }

    public function cetak () {
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $p) {
            $str .= "- {$p->GetInfoProduk()} <br>";
        }

        return $str;
    }
}

// object
$produk1 = new Komik("Naruto", "Masashi moto", "jump", 12000, 100);
$produk2 = new Game("Unchareted", "Neil Drukman", "sonny Computer", 240000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();