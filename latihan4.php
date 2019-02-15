<?php
	// Tanpa Method Chaining
	class Mobil
	{
		public $tangki = 0;

		public function isiBensin($liter)
		{
			$this->tangki += $liter;
		}

		public function kendarai($jarak)
		{
			$terpakai = $jarak / 20;
			$this->tangki -= $terpakai;
		}
	}

	$mobil = new Mobil();
	$mobil->isiBensin(2); //Memanggil meyhod isiBensin() dengan nilai argument 2
	$mobil->kendarai(20);//Memanggil meyhod kendarai() dengan nilai argument 20
	$sisaBensin = $mobil->tangki; //Mendapatkan sisa tangki dari property $tangki stelah mobil dikendarai
	echo "Sisa Bensin = ". $sisaBensin . " liter \n";

	// Dengan Method Chaining
	class Mobil1
	{
		public $tangki = 0;

		public function isiBensin($liter)
		{
			$this->tangki += $liter;
			return $this; // Mengembalikan nilai $this
		}

		public function kendarai($jarak)
		{
			$terpakai = $jarak / 20;
			$this->tangki -= $terpakai;
			return $this;
		}
	}

	$mobil = new Mobil1();
	$sisaBensin = $mobil->isiBensin(6)->kendarai(40)->tangki; // Penggunaan Method Chaining untuk mendapatkan $sisaBensin
	echo "Sisa Bensin = ". $sisaBensin . " liter \n";
