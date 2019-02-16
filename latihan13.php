<?php 
	/**
	 * Static & Constant
	 * Penggunaan tidak disarankan
	 * Hanya digunakan untuk situasi2 tertentu
	 * 
	 */

	// Static Property & Method Property
	// Keyword static diletakkan setelah access modifier  
	class Latihan
	{
		public static $namaProperty = 'Static Property';

		public static function namaMethod()
		{
			return "Static Method";
		}
	}

	echo Latihan::$namaProperty."\n"; // Tidak usah melakukan instance object, lakukan perintah echo ClassName::$nameProperty
	echo Latihan::namaMethod()."\n"; // Tidak usah melakukan instance object, lakukan perintah echo ClassName::$nameMethod
	
	/**
	 * 
	 */
	class Mobil
	{
		private static $merk = 'bmw';

		// Membuat static method uppercase yang mengubah nilai private static property menjadi huruf kapital
		private static function uppercase($text)
		{
			return strtoupper($text); // Menggunakan strtoupper (String to uppercase)
		}

		public static function getMerk()
		{
			$merk = self::$merk; // mendapatkan nilai property $merk dan memanggil private static property menggunakan keyword self::<namaProperty>
			return self::uppercase($merk); // mengakses static method menggunakan syntax self::namaMethod()
		}
	}

	echo Mobil::getMerk()."\n"; 

	/**
	 * Static untuk counter
	 * Dimana static property bersifat shared, artinya jika suatu class memiliki static property dan membuat 2 instance object maka nilai hasil dari instance object akan ditambahkan ke nilai hasil instance object kedua
	 */
	class Motor
	{
		public static $km = 0;

		public function jalan($jarak) // membuat method jalan untuk mengakses static property $km
		{
			self::$km += $jarak; // mengakses static property $km digunakan keyword self::$km dimana $km = $jarak
		}
	}

	$motor1 = new Motor();
	$motor1->jalan(20);
	echo Motor::$km."\n"; // memanggil static property dari class Motor 

	$motor2 = new Motor();
	$motor2->jalan(5);
	echo Motor::$km."\n";

	// Output
	// 20 
	// 25 -> hasil ini karena hasil dari object 1 ditambahkan dengan nilai yang dimasukkan ke object 2 ; 20+5=25
