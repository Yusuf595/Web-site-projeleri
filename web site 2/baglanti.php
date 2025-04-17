<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_şifre="";
$vt_adi="falci_sitesi";


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_şifre, $vt_adi);


if(!$baglan)
{
        die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}

?>