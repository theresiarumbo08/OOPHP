<?php

//     class ContohStatic{
//         //property static
//         public static $angka = 1;

//         //method static
//         public static function halo(){
//             //ingin mengambil property angka
//             //karena tidak melakukan instansiasi maka kita tidak bisa pakai $this
//             return "Halo " . self::$angka++. " kali. ";
//         }
//     }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh{
    public static $angka =1;


    public function halo(){
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

