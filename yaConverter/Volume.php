<?php
namespace yaConverter;

class Volume {
	//Cu. inches - cu. feet, cu. feet - cu. yards, cu. feet - gallons
	//Cu. inches - cu. yards, cu. inches - gallons, cu. inches - fl. ounces
	//Cu. inches - pints, cu. inches - quarts
	public static function CuInToCuFt($cuinches) {
		$cufeet = $cuinches / 1728;
		return $cufeet;
	} public static function CuFtToCuIn($cufeet) {
		$cuinches = $cufeet * 1728;
		return $cuinches;
	} public static function CuFtToCuYd($cufeet) {
		$cuyards = $cufeet / 27;
		return $cuyards;
	} public static function CuYdToCuFt($cuyards) {
		$cufeet = $cuyards * 27;
		return $cufeet;
	} public static function CuFtToGal($cufeet) {
		$gallons = $cufeet * 7.480519;
		return $gallons;
	} public static function GalToCuFt($gallons) {
		$cufeet = $gallons / 7.480519;
		return $cufeet;
	} public static function CuInToCuYd($cuinches) {
		$cuyards = $cuinches / 46656;
		return $cuyards;
	} public static function CuYdToCuIn($cuyards) {
		$cuinches = $cuyards * 46656;
		return $cuinches;
	} public static function CuInToGal($cuinches) {
		$gallons = $cuinches / 231;
		return $gallons;
	} public static function GalToCuIn($gallons) {
		$cuinches = $gallons * 231;
		return $cuinches;
	} public static function CuInToFlOz($cuinches) {
		$flounces = $cuinches / 1.80469;
		return $flounces;
	} public static function FlOzToCuIn($flounces) {
		$cuinches = $flounces * 1.80469;
		return $cuinches;
	} public static function CuInToPt($cuinches) {
		$pints = $cuinches / 28.875;
		return $pints;
	} public static function PtToCuIn($pints) {
		$cuinches = $pints * 28.875;
		return $cuinches;
	} public static function CuInToQt($cuinches) {
		$quarts = $cuinches / 57.75;
		return $quarts;
	} public static function QtToCuIn($quarts) {
		$cuinches = $quarts * 57.75;
		return $cuinches;
	}
	
	//Fl. ounces - pints, pints - quarts, pints - gallons
	//Cu. feet - fl. ounces, cu. feet - pints, cu. feet - quarts
	public static function FlOzToPt($flounces) {
		$pints = $flounces / 16;
		return $pints;
	} public static function PtToFlOz($pints) {
		$flounces = $pints * 16;
		return $flounces;
	} public static function PtToQt($pints) {
		$quarts = $pints / 2;
		return $quarts;
	} public static function QtToPt($quarts) {
		$pints = $quarts * 2;
		return $pints;
	} public static function PtToGal($pints) {
		$gallons = $pints / 8;
		return $gallons;
	} public static function GalToPt($gallons) {
		$pints = $gallons * 8;
		return $pints;
	} public static function CuFtToFlOz($cufeet) {
		$flounces = $cufeet * 957.5065;
		return $flounces;
	} public static function FlOzToCuFt($flounces) {
		$cufeet = $flounces / 957.5065;
		return $cufeet;
	} public static function CuFtToPt($cufeet) {
		$pints = $cufeet * 59.84416;
		return $pints;
	} public static function PtToCuFt($pints) {
		$cufeet = $pints / 59.84416;
		return $cufeet;
	} public static function CuFtToQt($cufeet) {
		$quarts = $cufeet * 29.92208;
		return $quarts;
	} public static function QtToCuFt($quarts) {
		$cufeet = $quarts / 29.92208;
		return $cufeet;
	}
	
	//Fl. ounces - quarts, fl. ounces - gallons, quarts - gallons
	//Cu. yards - gallons, cu. yards - fl. ounces, cu. yards - pints
	//Cu. yards - quarts
	public static function FlOzToQt($flounces) {
		$quarts = $flounces / 32;
		return $quarts;
	} public static function QtToFlOz($quarts) {
		$flounces = $quarts * 32;
		return $flounces;
	} public static function FlOzToGal($flounces) {
		$gallons = $flounces / 128;
		return $gallons;
	} public static function GalToFlOz($gallons) {
		$flounces = $gallons * 128;
		return $flounces;
	} public static function QtToGal($quarts) {
		$gallons = $quarts / 4;
		return $gallons;
	} public static function GalToQt($gallons) {
		$quarts = $gallons * 4;
		return $quarts;
	} public static function CuYdToGal($cuyards) {
		$gallons = $cuyards * 201.974;
		return $gallons;
	} public static function GalToCuYd($gallons) {
		$cuyards = $gallons / 201.974;
		return $cuyards;
	} public static function CuYdToFlOz($cuyards) {
		$flounces = $cuyards * 25852.68;
		return $flounces;
	} public static function FlOzToCuYd($flounces) {
		$cuyards = $flounces / 25852.68;
		return $cuyards;
	} public static function CuYdToPt($cuyards) {
		$pints = $cuyards * 1615.792;
		return $pints;
	} public static function PtToCuYd($pints) {
		$cuyards = $pints / 1615.792;
		return $cuyards;
	} public static function CuYdToQt($cuyards) {
		$quarts = $cuyards * 807.8961;
		return $quarts;
	} public static function QtToCuYd($quarts) {
		$cuyards = $quarts / 807.8961;
		return $cuyards;
	}
}
