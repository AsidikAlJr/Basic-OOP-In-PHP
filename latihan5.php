<?php
	// Penggunaan Magic Methods __construct
	class Mobil
	{
		public $merk = '';

		public function __construct($merk) // __construct => digunakan mengatur nilai awal dari suatu property
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return 'Merk '.__CLASS__.' ini adalah : '.$this->merk; // Penggunan Magic Constant __CLASS__ => berisi nama class dari suatu object
			// return 'Merk Mobil Ini Adalah '.$this->merk;
		}
	}

	$mobil = new Mobil('Suzuki');
	echo $mobil->getMerk()."\n";
