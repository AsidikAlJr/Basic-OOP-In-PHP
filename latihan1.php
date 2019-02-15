<?php
	
	//Membuat class
	class Mobil
	{
		//Menambahkan property
		public $merk = 'Toyota';
		public $tipe = 'Fortuner';
		public $tahun = '2016';
		public $warna = 'Silver';

		public function maju()
		{
			echo "Broommmmmm.....\n";
		}
	}

	//Membuat object dari class Mobil
	$mobil = new Mobil();
	// var_dump($mobil);
 
	// Mengatur nilai property
	$mobil->merk = 'Suzuki';
	$mobil->tipe = 'Ertiga';
	$mobil->tahun = '2014';
	$mobil->warna = 'Merah';

	//Mengakses property
	echo "Mobil $mobil->merk \n";
	echo "Model $mobil->tipe \n";
	echo "Tahun $mobil->tahun \n";
	echo "Warna $mobil->warna \n";

	//Menjalankan method maju()
	$mobil->maju();