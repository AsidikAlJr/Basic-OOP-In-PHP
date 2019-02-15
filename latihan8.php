<?php
	/**
	 * Penggunaan Abstrac Class & Abstract Method 
	 */
	// Parent Class
	// Abstract Class = class yang mengandung setidaknya satu  abstract method
	// Abstract Class hanya dipakai utk memberikan peraturan bagi Child Class
	abstract class BangunDatar
	{
		// Abstract Method = method yang hanya dideklrasikan nama dan argumennya saja, sdgkn implementasinya tidak diberikan {seharusnya didalam kurung kurawal ada code namun karena abstract method tidak mengimplementasikannya}
		abstract protected function hitungLuas();

	}
	
	class Persegi extends BangunDatar
	{
		protected $sisi = 4;

		public function hitungLuas()
		{
			return pow($this->sisi, 2);
		}
	}
	
	class Segitiga extends BangunDatar
	{
		protected $alas = 6;
		protected $tinggi = 8;

		public function hitungLuas()
		{
			return (0.5 * $this->alas * $this->tinggi);
		}
	}

	class Lingkaran extends BangunDatar
	{
		protected $jariJari = 14;

		public function hitungLuas()
		{
			return (3.14 * pow($this->jariJari, 2));
		}
	}
	$persegi = new Persegi();
	echo "Luas Persegi = ".$persegi->hitungLuas()."\n";

	$segitiga = new Segitiga();
	echo "Luas Segitiga = ".$segitiga->hitungLuas()."\n";

	$lingkaran = new Lingkaran();
	echo "Luas Lingkaran = ".$lingkaran->hitungLuas()."\n";


	// Menambah property & method di Abstract Class
	abstract class Mobil
	{
		protected $volTangki = 0;
		public function isiBensin($vol)
		{
			$this->volTangki = $vol;
		}

		abstract protected function jarakTempuhMaksimum();
	}

	class BMW extends Mobil
	{
		protected $perLiter = 30;

		public function jarakTempuhMaksimum()
		{
			$jarakMaks = $this->perLiter * $this->volTangki;
			echo "Jarak tempuh maks Toyota = " . $jarakMaks." km \n";
		}
	}

	class Lamborghini extends Mobil
	{
		protected $perLiter = 50;

		public function jarakTempuhMaksimum()
		{
			$jarakMaks = $this->perLiter * $this->volTangki;
			echo "Jarak tempuh maks Lamborghini = " . $jarakMaks . " km \n";
		}
	}

	$bmw = new BMW();
	$bmw->isiBensin(30);
	$bmw->jarakTempuhMaksimum();

	$lamborghini = new Lamborghini();
	$lamborghini->isiBensin(20);
	$lamborghini->jarakTempuhMaksimum();