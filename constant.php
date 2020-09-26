<?php
define('NAMA', 'Hdi');

class Constant{
    const UMUR = 21;
}

function coba(){
    return __FUNCTION__;
}

class Coba{
    public $kelas  = __CLASS__;
}

echo coba(); echo "<br>";
$obj = new Coba();
echo $obj->kelas;

echo "<hr>";

echo NAMA; echo "<br>";
echo Constant::UMUR;
echo "<br>";
echo __LINE__; echo "<br>";
echo __FILE__; echo "<br>";
echo __DIR__; echo "<br>";

?>