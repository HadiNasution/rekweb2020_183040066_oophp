<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto","Mashahi Khisimoto","Shonen Jump",30000,100);
$produk2 = new Game("Minecraft","Noth","Mojang",50000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();