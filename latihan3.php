<?php
	class Mobil
	{
		public $merk = 'BMW';

		// Penggunaan keyword $this untuk method 
		public function sebutMerk() 
		{
			//Mengakses property $merk dari method sebutMerk()
			// return $this->merk;
			
			//Mengakses property $merk
			$merk = $this->merk;

			//Mengubah format & mengembalikan property $merk
			return $this->lowercase($merk); // penggunaan lowercase untuk mengubah nilai dari property $merk menjadi huruf kecil
		}

		public function lowercase($merk)
		{
			return strtolower($merk); // strtolower membuat string menjadi lowercase
		}
	}

	$mobil = new Mobil();
	echo $mobil->sebutMerk()."\n";

