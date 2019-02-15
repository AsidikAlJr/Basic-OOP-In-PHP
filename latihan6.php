<?php
	// Penerapan Public Access Modifier
	class MobilJepang
	{
		public $merk;

		public function getMerk() // Penggunaan Getter untuk mendapat nilai property
		{
			return $this->merk;
		}
	}

	$mobil = new MobilJepang();
	$mobil->merk = 'Toyota';
	echo "Merk mobil ini adalah ".$mobil->getMerk()."\n"; // Untuk menampilkan nilai property

	// Penerapan Private Access Modifier
	class Mobil
	{
		private $merk;

		public function setMerk($merk) // Penggunaan Setter untuk mengatur nilai private property $merk
		{
			return $this->merk = $merk;
		}
		public function getMerk() // Penggunaan Getter untuk mendapat nilai private property $merk
		{
			return $this->merk;
		}
	}

	$mobil = new Mobil();
	$mobil->setMerk('Suzuki'); // Untuk mengatur nilai property digunakan setMerk()
	echo "Merk mobil ini adalah ".$mobil->getMerk()."\n";

	// Membatasi agar hanya merk mobiljepang saja yang diperbolehkan sebagai nilai property $merk
	class MobilJepang1
	{
		private $merk;

		public function setMerk($merk)
		{
			$merkJepang = ['Honda', 'Suzuki', 'Toyota', 'Nissan'];
				if (in_array($merk, $merkJepang)) {
					return $this->merk =  $merk;
				}
		}

		public function getMerk()
		{
			return $this->merk;
		}
	}

	$mobil = new MobilJepang1();
	$mobil->setMerk('BMW'); // Jika argument berisi nilai yang tidak ada di method setMerk() dengan property $mobilJepang maka akan terjadi error. Jika termasuk maka akan memasukkan nilai private property . Jika tidak maka dimasukkan maka $merk tidak memiliki nilai private property atau kosong.
	echo "Merk mobil ini adalah ".$mobil->getMerk()."\n";

	// Penggunaan Private Method
	class Mobill
	{
		
		public function maju()
		{
			$maju = $this->injakKopling();
			$maju .= $this->ubahPerseneling();
			$maju .= $this->injakgas();
			$maju .= "Brrooooooommmmmm..... \n";
			echo $maju;
		}

		private function injakKopling()
		{
			return "Injak Kopling \n";
		}

		private function ubahPerseneling()
		{
			return "Ubah Perseneling \n";
		}

		private function injakGas()
		{
			return "Injak Gas \n";
		}
	}


	$mobill = new Mobill();
	$mobill->maju();
