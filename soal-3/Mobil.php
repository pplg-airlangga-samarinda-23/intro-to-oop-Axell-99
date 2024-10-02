<?php
class Mobil {
    public $merek;
    public $plat;
    public $model;
    public $warna;
    public $tahun;
    public $kecepatan = 0;

    public function Melaju() {
        echo "Mobil Sedang Melaju Kencang.";
    }

    public function Berhenti() {
        $this->kecepatan = 0;
        echo "Mobil Sedang Berhenti.";
    }

    public function gantiGigi($gigi) {
        echo "Mobil mengganti gigi ke " . $gigi . ".";
    }

    public function keseluruhan() {
        echo "Mobil: " . $this->merek . " Plat: " .$this ->plat . $this->model . " Warna: " . $this->warna . " Tahun: " . $this->tahun . " Sedang Melaju Dengan Kecepatan " . $this->kecepatan . " KM/Jam.";
    }
}

$mobilku = new Mobil();
$mobilku->merek = "Nissan";
$mobilku->plat = "XENZ GODD! ";
$mobilku->model = "R34";
$mobilku->warna = "Biru Putih";
$mobilku->tahun = 1999;

$mobilku->Melaju();
$mobilku->gantiGigi(2);
$mobilku->berhenti();
$mobilku->keseluruhan();
?>