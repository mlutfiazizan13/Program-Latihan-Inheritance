<?php
class Toko{
    public $namaBarang, 
        $merk, 
        $harga,
        $ukuranLayar,
        $kapasitas;
    // membuat method
    public function cetakProduk(){
        return "$this->namaBarang, $this->merk, (Rp $this->harga)";
    }

    public function __construct($namaBarang = "Nama Barang", $merk = "Merk", $harga = 0, $ukuranLayar = "Ukuran Layar", $kapasitas = "Kapasitas"){
        $this->namaBarang = $namaBarang;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->ukuranLayar = $ukuranLayar;
        $this->kapasitas = $kapasitas;
    }

    public function info(){
        $str="{$this->namaBarang}, {$this->cetakProduk()}";
        return $str;



    }
}

class laptop extends Toko{
    public function info(){
        $str="Laptop : {$this->namaBarang}, {$this->cetakProduk()} | Ukuran Layar : ($this->ukuranLayar)";
        return $str;

}
}

class flashdisk extends Toko{
    public function info(){
        $str="Flashdisk : {$this->namaBarang}, {$this->cetakProduk()} | Kapasitas : ($this->kapasitas)";
        return $str;

}
}


$barang1 = new laptop("Macbook Pro" , "Apple", 30000000, "14 inch", "-");
$barang2 = new Flashdisk("Flashdisk", "Sony", 100000, "-", "32 GB");



echo "Nama Barang : " . $barang1->info();
echo "<br>";
echo "Nama Barang : " . $barang2->info();
echo "<br>";

?>