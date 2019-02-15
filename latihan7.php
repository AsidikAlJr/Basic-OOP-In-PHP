<?php
	// Membuat Turunan Class atau Inheritance
	// tanpa ada tambahan property dan method di child class
	// Parents Class 
	class Mobil
	{
		private $merk;

		public function setMerk($merk)
		{
			return $this->merk = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function halo()
		{
			return "Halo saya adalah ".$this->merk."\n";
		}
	}
	// Child Class
	class MobilSport extends Mobil{} // Pendeklarasian class MobilSport yang menurun dari class Mobil

	// Instance MobilSport
	$ferrari = new MobilSport(); // Membuat object baru dari class
	$ferrari->setMerk('Ferrari'); // Karena class MobilSport adalah turunan dari class Mobil maka dapat akses method setMerk(), getMerk(), halo()
	echo $ferrari->halo();

	// Menambahkan property & method di Child Class
	class Mobill
	{
		private $merk;

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function halo()
		{
			return "Halo saya adalah ".$this->merk."\n";
		}
	}

	class MobilSportt extends Mobill
	{
		private $nos = 'NOS'; // Mendeklarasikan private property $nos pada child class MobilSport{} yang hanya bisa diakses oleh class MobilSport{}

		public function ngebut()
		{
			return "Mengendarai ".$this->getMerk()." dengan ".$this->nos."\n";
		}
	}

	$ferrari = new MobilSportt();
	$ferrari->setMerk('Ferrari');
	echo $ferrari->ngebut();

	// Penggunaan Protected Access Modifier
	// Protected Property -> agar bisa property dan method bisa diakses oleh child & parent class
	
	// Parent Class
	class Mobilll
	{
		protected $merk; // Penggunan Protected Property

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}
	}

	// Child Class
	class MobilSporttt extends Mobilll
	{
		public function halo()
		{
			return "Halo lagi saya adalah ".$this->merk."\n";
		}
	}

	$ferrari = new MobilSporttt();
	$ferrari->setMerk('Ferrari');
	echo $ferrari->halo();

	// Penggunaan Property & Method Overriding untuk mengubah nilai property & method dari Parent Class dengan nama yang sama
	
	// Parent Class
	class Mobilku
	{
		public $merk;

	 	public function klakson()
	 	{
	 		return "Tin...tin...";
	 	}
	} 

	// Child Class
	class MobilSportku extends Mobilku
	{
		public $merk = 'Lamborghini';

		public function klakson()
		{
			return " Telolet..telolet...";
		}
	}
	// output => mengubah method klakson tin ke telolet

	$lamborghini = new MobilSportku();
	echo $lamborghini->merk;
	echo $lamborghini->klakson()."\n";

	// Mencegah Method Overridding yang dapat mengubah property dan method
	// Untuk property hanya menggunakan keyword static property atau constant dan tidak boleh menggunakan keyword final, karena final hanya untuk class dan method
	class Mobil1
	{
		
		final public function mesin() // Digunakkan keyword final pada public function untuk mencegah Child Class meng-override Parent Class
		{
			return "Mesin Bensin";
		}
	}

	class MobilListrik extends Mobil1
	{
		
		public function mesin()
		{
			return "Mesin Elektrik";
		}
	}

	$tesla = new MobilListrik();
	echo $tesla->mesin(); // Karena tidak bisa meng-override Parent Class maka akan terjadi Error

	// Mencegah Inheritance atau Pewarisan dari Parent Class ke Child Class
	final class Mobil2
	{
		
		public function mesin()
		{
			return "Mesin Bensin";
		}
	}
	class MobilListrik1 extends Mobil2
	{
		
		public function mesin()
		{
			return "Mesin Elektrik";
		}
	}

	$tesla = new MobilListrik1();
	echo $tesla->mesin(); // Maka akan terjadi error karena class Mobil2 memakai keyword final untuk mencegah Inheritance atau pewarisan
