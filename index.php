<?php  

class Hewan {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

class Kucing extends Hewan {
	function bersuara(){ 
		return "Meooong";
	}
}

class Anjing extends Hewan {
	function bersuara(){
		return "Guk Guk";
	}
}

class gagak extends Hewan {
	function bersuara(){
		return "roooow";
	}
}

class Angsa extends Hewan {
	function bersuara(){
		return "Kwaaak";
	}
}

$tom = new Kucing;
$tom->jumlah_kaki = 4;
echo "tom Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$tom->jumlah_kaki."<br>";
$tom->bisa_terbang = "Tidak Bisa Terbang";
echo $tom->bisa_terbang."<br>";
echo "Suaranya : ".$tom->bersuara()."<br>";

echo "<hr>";

$inuarasi = new Anjing;
$inuarasi->jumlah_kaki = 4;
echo "inuarasi Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$inuarasi->jumlah_kaki."<br>";
$inuarasi->bisa_terbang = "Tidak Bisa Terbang";
echo $inuarasi->bisa_terbang."<br>";
echo "Suaranya : ".$inuarasi->bersuara();

echo "<hr>";

$karasuno = new gagak;
$karasuno->jumlah_kaki = 2;
echo "karasuno Adalah gagak <br>";
echo "Punya Kaki Sebanyak : ".$karasuno->jumlah_kaki."<br>";
$karasuno->bisa_terbang = "Bisa Terbang";
echo $karasuno->bisa_terbang."<br>";
echo "Suaranya : ".$karasuno->bersuara();

echo "<hr>";

$donal = new Angsa;
$donal->jumlah_kaki = 2;
echo "donal Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$donal->jumlah_kaki."<br>";
$donal->bisa_terbang = "Bisa Terbang";
echo $donal->bisa_terbang."<br>";
echo "Suaranya : ".$donal->bersuara();