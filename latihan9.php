<?php
	// Penggunaan Interface
	Interface Mobil
	{
		public function setMerk($merk);

		public function getMerk();		
	}

	class BMW implements Mobil
	{
		private $merk;

		public function setMerk($merk)
		{
			$this->mer k = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}
	}

	$bmw = new BMW();
	$bmw->setMerk('BMW');
	echo $bmw->getMerk()."\n";

	// Penggunaan lebih dari satu interface
	
	interface Mobil1
	{
		public function setMerk($merk);

		public function getMerk();
	}

	interface KendaraanBeroda
	{
		public function setRoda($jumlahRoda);

		public function getRoda();
	}

	class BMWW implements Mobil1, KendaraanBeroda
	{
		private $merk;
		private $jumlahRoda;

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function setRoda($roda)
		{
			$this->jumlahRoda = $roda;
		}

		public function getRoda()
		{
			return $this->jumlahRoda;
		}
	}

	$bmw = new BMWW();
	$bmw->setMerk('BMW');
	$bmw->setRoda(4);
	echo "Mobil ".$bmw->getMerk()." mempunyai ".$bmw->getRoda()." roda"."\n";
