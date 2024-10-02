<?php
class Waktu
{
    // deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan metode sesuai yang diminta buku
}

$contoh = new Waktu(23,59,59);
$contoh -> jam = 23;
$contoh -> menit = 59;
$contoh -> detik = 59;
echo "Sekarang pukul ".$contoh->jam.":".$contoh->menit.":".$contoh->detik."<br>";
?>