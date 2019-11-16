<?php
namespace yaConverter;

class Length {
  	//Inches - feet, inches - yards, inches - miles
  	public static function InToFtIn($inches) {
		$feet = floor($inches / 12);
		$inches = $inches % 12;
		return array("feet" => $feet, "inches" => $inches);
	} public static function InToFt($inches) {
		return $inches / 12;
	} public static function FtInToIn($feet, $inches = 0) {
		return ($feet * 12) + $inches;
	} public static function FtToIn($feet, $inches = 0) {
		return self::FtInToIn($feet, $inches);
	} public static function InToYdIn($inches) {
		$yards = floor($inches / 36);
		$inches = $inches % 36;
		return array("yards" => $yards, "inches" => $inches);
	} public static function InToYd($inches) {
		return $inches / 36;
	} public static function YdInToIn($yards, $inches = 0) {
		return ($yards * 36) + $inches;
	} public static function YdToIn($yards, $inches = 0) {
		return self::YdInToIn($yards, $inches);
	} public static function InToMiIn($inches) {
		$miles = floor($inches / 63360);
		$inches = $inches % 63360;
		return array("miles" => $miles, "inches" => $inches);
	} public static function InToMi($inches) {
		return $inches / 63360;
	} public static function MiInToIn($miles, $inches = 0) {
		return ($miles * 63360) + $inches;
	} public static function MiToIn($miles, $inches = 0) {
		return self::MiInToIn($miles, $inches);
	}
	
	//Feet - yards, feet - miles
	public static function FtToYdFt($feet) {
		$yards = floor($feet / 3);
		$feet = $feet % 3;
		return array("yards" => $yards, "feet" => $feet);
	} public static function FtToYd($feet) {
		return $feet / 3;
	} public static function FtToMiFt($feet) {
		$miles = floor($feet / 5280);
		$feet = $feet % 5280;
		return array("miles" => $miles, "feet" => $feet);
	} public static function FtToMi($feet) {
		return $feet / 5280;
	} public static function MiFtToFt($miles, $feet = 0) {
		return ($miles * 5280) + $feet;
	} public static function MiToFt($miles, $feet = 0) {
		return self::MiFtToFt($miles, $feet);
	} public static function YdFtToFt($yards, $feet = 0) {
		return ($yards * 3) + $feet;
	} public static function YdToFt($yards, $feet = 0) {
		return self::YdFtToFt($yards, $feet);
	}
	
	//Yards - miles
	public static function YdToMiYd($yards) {
		$miles = floor($yards / 1760);
		$yards = $yards % 1760;
		return array("miles" => $miles, "yards" => $yards);
	} public static function YdToMi($yards) {
		return $yards / 1760;
	} public static function MiYdToYd($miles, $yards = 0) {
		return ($miles * 1760) + $yards;
	} public static function MiToYd($miles, $yards = 0) {
		return self::MiYdToYd($miles, $yards);
	}
  
  	//Double-stacked
  	public static function FtInToFt($feet, $inches = 0) { return self::InToFt(self::FtInToIn($feet, $inches)); }
	public static function FtInToYd($feet, $inches = 0) { return self::InToYd(self::FtInToIn($feet, $inches)); }
	public static function FtInToMi($feet, $inches = 0) { return self::InToMi(self::FtInToIn($feet, $inches)); }
	public static function YdInToFt($yards, $inches = 0) { return self::InToFt(self::YdInToIn($yards, $inches)); }
	public static function YdInToYd($yards, $inches = 0) { return self::InToYd(self::YdInToIn($yards, $inches)); }
	public static function YdInToMi($yards, $inches = 0) { return self::InToMi(self::YdInToIn($yards, $inches)); }
	public static function YdFtToIn($yards, $feet = 0) { return self::FtToIn(self::YdFtToFt($yards, $feet)); }
	public static function YdFtToYd($yards, $feet = 0) { return self::FtToYd(self::YdFtToFt($yards, $feet)); }
	public static function YdFtToMi($yards, $feet = 0) { return self::FtToMi(self::YdFtToFt($yards, $feet)); }
	public static function MiInToFt($miles, $inches = 0) { return self::InToFt(self::MiInToIn($miles, $inches)); }
	public static function MiInToYd($miles, $inches = 0) { return self::InToYd(self::MiInToIn($miles, $inches)); }
	public static function MiInToMi($miles, $inches = 0) { return self::InToMi(self::MiInToIn($miles, $inches)); }
	public static function MiFtToIn($miles, $feet = 0) { return self::FtToIn(self::MiFtToFt($miles, $feet)); }
	public static function MiFtToYd($miles, $feet = 0) { return self::FtToYd(self::MiFtToFt($miles, $feet)); }
	public static function MiFtToMi($miles, $feet = 0) { return self::FtToMi(self::MiFtToFt($miles, $feet)); }
	public static function MiYdToIn($miles, $yards	= 0) { return self::YdToIn(self::MiYdToYd($miles, $yards)); }
	public static function MiYdToFt($miles, $yards	= 0) { return self::YdToFt(self::MiYdToYd($miles, $yards)); }
	public static function MiYdToMi($miles, $yards	= 0) { return self::YdToMi(self::MiYdToYd($miles, $yards)); }
	
	public static function FtToFtIn($feet) { return self::InToFtIn(self::FtToIn($feet)); }
	public static function YdToFtIn($yards) { return self::InToFtIn(self::YdToIn($yards)); }
	public static function MiToFtIn($miles) { return self::InToFtIn(self::MiToIn($miles)); }
	public static function FtToYdIn($feet) { return self::InToYdIn(self::FtToIn($feet)); }
	public static function YdToYdIn($yards) { return self::InToYdIn(self::YdToIn($yards)); }
	public static function MiToYdIn($miles) { return self::InToYdIn(self::MiToIn($miles)); }
	public static function InToYdFt($inches) { return self::FtToYdFt(self::InToFt($inches)); }
	public static function YdToYdFt($yards) { return self::FtToYdFt(self::YdToFt($yards)); }
	public static function MiToYdFt($miles) { return self::FtToYdFt(self::MiToFt($miles)); }
	public static function FtToMiIn($feet) { return self::InToMiIn(self::FtToIn($feet)); }
	public static function YdToMiIn($yards) { return self::InToMiIn(self::YdToIn($yards)); }
	public static function MiToMiIn($miles) { return self::InToMiIn(self::MiToIn($miles)); }
	public static function InToMiFt($inches) { return self::FtToMiFt(self::InToFt($inches)); }
	public static function YdToMiFt($yards) { return self::FtToMiFt(self::YdToFt($yards)); }
	public static function MiToMiFt($miles) { return self::FtToMiFt(self::MiToFt($miles)); }
	public static function InToMiYd($inches) { return self::YdToMiYd(self::InToYd($inches)); }
	public static function FtToMiYd($feet) { return self::YdToMiYd(self::FtToYd($feet)); }
	public static function MiToMiYd($miles) { return self::YdToMiYd(self::MiToYd($miles)); }
}
