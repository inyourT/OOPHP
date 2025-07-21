<?php 
// Static pada PHP agar nilai menjadi tetap.
// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "Hallo." . self::$angka++ . "Kali. ";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo ContohStatic::halo();

// ini bukan static tapi instansiasi object
class contoh {
    public static $angka = 1;

    public function halo(){
        return "hallo" . self::$angka++ . "kali";
    }
}

$ob = new contoh;
$ob2 = new contoh;

echo $ob->halo();
echo $ob->halo();
echo $ob->halo();

echo"<hr>";

echo $ob2->halo();
echo $ob2->halo();
echo $ob2->halo();
