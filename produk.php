<?php
class Produk{

    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";
    
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }

}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Mashahi Khisimoto";
$produk1->penerbit = "idaten";
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = "Minecraft";
$produk2->penulis = "Noth";
$produk2->penerbit = "Mojang";
$produk2->harga = 50000;

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();