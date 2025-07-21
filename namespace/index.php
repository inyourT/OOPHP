<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi moto", "jump", 12000, 100);
// $produk2 = new Game("Unchareted", "Neil Drukman", "sonny Computer", 240000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser; 
use App\Produk\User as ProdukUser; 


new ServiceUser();
echo "<br>";
new ProdukUser();