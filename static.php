<?php

/*
class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "halo.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
*/

class Contoh{
    public static $angka = 1;

    public function halo(){
        return "halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj1 = new Contoh();
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

?>