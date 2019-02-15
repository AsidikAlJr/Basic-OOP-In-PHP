<?php 
	/**
	* Penggunaan Polymorphism 
	* Polymorphism adalah method yang berada pada class berbeda, yang melakukan hal yang sama, harus memiliki nama yang sama pula	 
	* Penerapan Polymorphism menggunakan abstarct class dan interface dengan tujuan membuat kontrack ke child class pada proses extends/   implements
	*/
	// Menerapkan Polymorphism dengan Interface
	interface BangunDatar
	{
		
		public function hitungLuas();
	
	}

	// Penggunaan Abstract Class pada Polymorphism
	class Persegi implements BangunDatar
	{
		private $sisi;

		public function __construct($sisi)
		{
			$this->sisi = $sisi;
		}

		public function hitungLuas()
		{
			// Fungsi pow() adalah sebagai pemangkatan matematika
			return pow($this->sisi, 2);
		}
	}

	class Segitiga implements BangunDatar
	{
		private $alas;
		private $tinggi;

		public function __construct($alas, $tinggi)
		{
			$this->alas = $alas;
			$this->tinggi = $tinggi;
		}

		public function hitungLuas()
		{
			return (0.5 * $this->alas * $this->tinggi);
		}
	}

	class Lingkaran implements BangunDatar
	{
		private $jariJari;

		public function __construct($jariJari)
		{
			$this->jariJari = $jariJari;
		}

		public function hitungLuas()
		{
			return (3.14 * pow($this->jariJari, 2));
		}
	}

	$persegi = new Persegi(4);
	echo "Luas Persegi adalah = ".$persegi->hitungLuas()."\n";

	$segitiga = new Segitiga(6, 12);
	echo "Luas Segitiga adalah = ".$segitiga->hitungLuas()."\n";

	$lingkaran = new Lingkaran(7);
	echo "Luas Lingkaran adalah = ".$lingkaran->hitungLuas()."\n";