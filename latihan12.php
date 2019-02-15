<?php 
	/**
	 * INTERFACE TYPE HINTING
	 */
	/*
	STUDI KASUS :
	Batman mempunyai mobil "BatCars". Untuk mengendarainya tentu harus ada sopir yaitu Batman.
	Dari sini bisa dibuat class Manusia() dan Mobil() 
	 */
	class Mobil
	{
		private $merk;

		public function __construct($merk)
		{
			$this->merk = $merk;
		}
		/*
		Melakukan type hinting, utk memastikan agar method jalan() menerima tipe object Manusia{}, maka dibuat keyword Manusia
		pada argument $sopir 
		 */
		public function jalan(Manusia $sopir)
		{
			echo $this->merk . " siap \n";
			echo $sopir->identitas(). " siap \n";
			echo "Berangkat... \n";
		}
	}

	class Manusia
	{
		private $nama;

		public function __construct($nama)
		{
			$this->nama = $nama;
		}

		public function identitas()
		{
			return $this->nama;
		}
	}

	$batman = new Manusia('Batman');
	$batcars = new Mobil('BatCars');
	$batcars->jalan($batman);

	/*
	STUDI KASUS
	Kemudian teknologi berkembang dengan pesat, batman ingin batcars berjalan otomatis. Akhirnya ia menggunakan Robot.
	 */

	class Mobil1
	{
		private $merk;

		public function __construct(string $merk)
		{
			$this->merk = $merk;
		}

		public function jalan(Robot $sopir)
		{
			echo $this->merk ." siap \n";
			echo $sopir->identitas(). " siap \n";
			echo "Berangkat... \n";
		}
	}
	
	class Robot
	{
		private $nama;
		private $versi;

		public function __construct(string $nama, string $versi)
		{
			$this->nama = $nama;
			$this->versi = $versi;
		}

		public function identitas()
		{
			return "$this->nama $this->versi";
		}
	}

	$android = new Robot('Android Oreo', '8.1');
	$batcars = new Mobil1('BatCars');
	$batcars->jalan($android);

	/*
	STUDI KASUS 
	Batcars bisa dikendarai oleh manusia dan robot.
	 */
	
	// Interface Type Hinting dengan Abstract Class
	class Mobil2
	{
		private $merk;

		public function __construct(string $merk)
		{
			$this->merk = $merk;
		}

		public function jalan(Sopir $sopir)
		{
			echo $this->merk. " siap \n";
			echo $sopir->identitas()." siap \n";
			echo "Berangkat... \n";
		}
	}

	abstract class Sopir
	{
		abstract protected function identitas();
	}

	class Manusia1 extends Sopir
	{
		private $nama;

		public function __construct(string $nama)
		{
			$this->nama = $nama;
		}

		public function identitas()
		{
			return $this->nama;
		}
	}

	class Robot1 extends Sopir
	{
		private $nama;
		private $versi;

		public function __construct(string $nama, string $versi)
		{
			$this->nama = $nama;
			$this->versi = $versi;
		}

		public function identitas()
		{
			return "$this->nama $this->versi";
		}
	}
	$batman = new Manusia1('Batman'); // Jika menggunakan Manusia()
	// $android = new Robot1('Android Oreo', '9.0'); // Jika menggunakan Robot()
	$batcars = new Mobil2('BatCars');
	$batcars->jalan($batman);

	/**
	 * Interface Type Hinting dengan Interface PHP
	 */
	class Mobil3
	{
		private $merk;

		public function __construct(string $merk)
		{
			$this->merk = $merk;
		}

		public function jalan(Sopir1 $sopir)
		{
			echo $this->merk." siap \n";
			echo $sopir->identitas()." siap \n";
			echo "Berangkat... \n";
		}
	}

	interface Sopir1
	{
		function identitas();
	}

	class Manusia2 implements Sopir1
	{
		private $nama;

		public function __construct(string $nama)
		{
			$this->nama = $nama;
		}

		public function identitas()
		{
			return $this->nama;
		}
	}

	class Robot2 implements Sopir1
	{
		private $nama;
		private $versi;

		public function __construct(string $nama, string $versi)
		{
			$this->nama = $nama;
			$this->versi = $versi;
		}

		public function identitas()
		{
			return "$this->nama $this->versi";
		}
	}
	$android = new Robot2('Android Marshmellow', '9.0'); 
	// $batman = new Manusia2('Batman');
	$batcars = new Mobil3('BatCars');
	$batcars->jalan($android);