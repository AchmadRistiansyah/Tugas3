<?php 
class mobil{
	public $merk;
	public $warna;
	public $harga;

public function getMobil(){
	return "$this->merk, $this->warna, $this->harga";
 }
 public function __construct($merk="merk", $warna="warna", $harga=0){
 	$this->merk=$merk;
 	$this->warna=$warna;
 	$this->harga=$harga;
 }
}
 $mobil1 = new mobil("Honda","Merah",100000000);
 $mobil2 = new mobil("Avanza", "Putih", 197000000);


 echo "Pilihan Anda : ".$mobil1->getMobil();
 echo "<br>";
 echo "Pilihan Anda : ".$mobil2->getMobil();

?>
