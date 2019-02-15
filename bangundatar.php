<?php 
	// Abstract Clas & Method
	abstract class BangunDatar // buat aturan tertentu di child class dimana child class harus menggunakan method parent class. bisa membuat property
	{
		protected $test = "Hello World"; // bisa diakses child class
		abstract protected function hitungLuas();
	}

	class Persegi extends BangunDatar
	{
		private $sisi = 4; // bisa diakses oleh kelas itu sendiri

		public function __construct()
		{
			echo $this->test;
		}

		public function hitungLuas()
		{
			return pow($this->sisi, 2);
		}
	}

	class Segitiga extends BangunDatar
	{
		private $alas = 6;
		private $tinggi = 12;

		public function hitungLuas()
		{
			return (0.5 * $this->alas * $this->tinggi);
		}
	}

	class Lingkaran extends BangunDatar
	{
		private $jariJari = 7;

		public function hitungLuas()
		{
			return (3.14 * pow($this->jariJari, 2));
		}
	}

	$persegi = new Persegi();
	echo "Luas Persegi = ".$persegi->hitungLuas()."\n";

	$segitiga =  new Segitiga();
	echo "Luas Segitiga = ".$segitiga->hitungLuas()."\n";

	$lingkaran = new Lingkaran();
	echo "Luas Lingkaran = ".$lingkaran->hitungLuas()."\n";

	// Interface
	
	Interface BangunDatar1 // implementasi methodnya harus public dan tidak bisa membuat property
	{
		public function hitungLuas();
	}

	class Persegi1 implements BangunDatar1
	{
		private $sisi;
		public function __construct() // __construct = menset nilai awal property ketika proses pembentukan object
		{

			$hasil = readline("Masukkan angka : ");
			$this->sisi = $hasil;
		}
		public function hitungLuas()
		{
			return pow($this->sisi, 2);
		}
	}

	class Segitiga1 implements BangunDatar1
	{
		private $alas;
		private $tinggi;

		public function __construct($alas, $tinggi)
		{
			$this->setAlas($alas); // memanggil function setAlas
			$this->setTinggi($tinggi); // memanggil function setTinggi
		}

		private function setAlas($alas) // setter -> mengatur nilai private property
		{
			$this->alas = $alas; // $this -> akses private property
		}

		public function getAlas() // getter -> mendapat nilai private property
		{
			return $this->alas;
		}

		private function setTinggi($tinggi)
		{
			$this->tinggi = $tinggi;
		}

		public function getTinggi() // mendapatkan nilai dari private property'
		{
			return $this->tinggi;
		}

		public function hitungLuas()
		{
			return (0.5 * $this->getAlas()* $this->getTinggi());
		}
	}

	class Lingkaran1 implements BangunDatar1
	{
		private $jariJari;
		const PHI = 3.14; // membuat variable constant 
	
		public function __construct($a)
		{
			$this->setJari($a); // $jariJari mendpt nilai dari $hasil
		}

		private function setJari($jariJari) // nama argument tidak harus sama dengan property
		{
			$this->jariJari = $jariJari;
		}

		public function getJari()
		{
			return $this->jariJari;
		}

		public function hitungLuas()
		{
			return (self::PHI * pow($this->jariJari, 2)); // self::PHI utk memanggil variable constant
		}
	}

	// $persegi = new Persegi1();
	// echo "Luas Persegi = ".$persegi->hitungLuas()."\n";
	// $a = readline("Masukkan alas : ");
	// $b = readline("Masukkan tinggi : ");
	// $segitiga = new Segitiga1($a, $b);// argumentnya $a dan $b = argument dari function construct yaitu $alas & $ting
	// echo "Luas Segitiga = ".$segitiga->hitungLuas()."\n";

	$hasil = readline("Luas Lingkaran : "); // membuat inputan untuk nilai property secara dinamis
	$lingkaran = new Lingkaran1($hasil);
	echo "Luas Lingkaran = ".$lingkaran->hitungLuas()."\n";