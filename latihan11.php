<?php 
/**
 * Type Hinting adalah suatu proses penentuan tipe data yang diterima sebagai argumen pada suatu method
 * Sehingga keamanan data lebih aman, karena sebelum data diproses dipastikan dahulu apakah data tersebut sesuai yang diharapkan
 * Penggunaan type hinting untuk array dan object  
 */
	// Type Hinting untuk Array
	function hitungJarak(array $mobils)
	{
		foreach ($mobils as $mobil) {
			$jarakMaks = $mobil[1] * $mobil[2];
			echo "Jarak Maksimal Mobil ".$mobil[0]." : ".$jarakMaks." km \n";
		}
	}

	$kendaran = [
		['Toyota', '10', '20'],
		['Suzuki', '15', '30']
	];

	hitungJarak($kendaran);

	// Type Hinting untuk Object
	class Mobil
	{
		private $merk; // Menggunakan private property yang hanya bisa diakses oleh class Mobil
		private $efisiensi;
		private $volBbm;

		public function __construct($merk, $efisiensi, $volBbm) // Menggunakan public method untuk mendapat akses private property
		{
			$this->merk = $merk;
			$this->efisiensi = $efisiensi;
			$this->volBbm = $volBbm;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function getEfisiensi()
		{
			return $this->efisiensi;
		}

		public function getVolBbm()
		{
			return $this->volBbm;
		}
	}

	class Calculator
	{
		public function hitungJarak(Mobil $mobil)
		{
			$efisiensi = $mobil->getEfisiensi();
			$volBbm = $mobil->getVolBbm();
			$jarakMaks = $efisiensi * $volBbm;
			echo "Jarak Maksimal Mobil ".$mobil->getMerk()." : ".$jarakMaks." km \n";
		}
	}

	$toyota = new Mobil('Toyota' ,15 ,20); // Membuat instance object utk mengisi argument
	$cal1 = new Calculator();
	$cal1->hitungJarak($toyota);

	$suzuki = new Mobil('Suzuki' ,14 ,24);
	$cal2 = new Calculator();
	$cal2->hitungJarak($suzuki);


	// Type Hinting untuk Tipe Data Dasar
	class Mobils
	{
		private $merk;
		private $harga;
		private $lunas;
		private $jumlahPintu;
		
		public function setMerk(string $merk) // Menggunakan Tipe Data String untuk huruf
		{
			$this->merk = $merk;
		}

		public function setHarga(float $harga) // Menggunakan Tipe Data Float atau angka desimal
		{
			$this->harga = $harga;
		}

		public function setLunas(bool $lunas) // Menggunakan Tipe Data Boolean untuk memberikan nilai TRUE atau FALSE 
		{
			$this->lunas = $lunas;
		}

		public function setJumlahPintu(int $jumlahPintu) // Menggunakan Tipe Data Int untuk bilangan bulat
		{
			$this->jumlahPintu = $jumlahPintu;
		}
	}

	$toyota = new Mobils();
	$toyota->setMerk('Toyota');
	$toyota->setHarga(125000000);
	$toyota->setLunas(true);
	$toyota->setJumlahPintu(2);
	var_dump($toyota);