<?php

	class Mobil
	{
		public $merk = '';
		public $tipe = '';

		public function maju()
		{
			echo "Broommmmmm....\n";
		}
	}

	//Membuat & mengatur property object 1
	$mobil1 = new Mobil();
	$mobil1->merk = 'Toyota';
	$mobil1->tipe = 'Fortuner';

	//Mencetak property & menjalankan method maju() object 1
	echo $mobil1->merk."\n".$mobil1->tipe."\n".$mobil1->maju();

	//Membuat & mengatur property object 2
	$mobil2 = new Mobil();
	$mobil2->merk = 'Suzuki';
	$mobil2->tipe = 'Ertiga';

	//Mencetak property & menjalankan method maju() object 2
	echo $mobil2->merk."\n".$mobil2->tipe."\n".$mobil2->maju();